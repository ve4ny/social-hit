<?php

namespace App\Orchid\Screens\Services;

use App\Models\Advantage;
use App\Models\Category;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class EditServiceScreen extends Screen
{
    public Social $social;
    public Category $category;
    public Service $service;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Social $social, Category $category, Service $service): iterable
    {
        $service->load('advantage');
        if($service->advantage) {
            $service->hasAdvantage = true;
        } else $service->hasAdvantage = false;
        $service->rate = $service->rate. '₽';
        $service->jap_rate = $service->jap_rate . '$';
        return [
            'social' => $social,
            'category' => $category,
            'service' => $service
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование услуги "' . $this->service->name . '"';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::columns([
                Layout::rows([
                    Input::make('service.id')->hidden(),
                    Input::make('service.name')->title('Название')->disabled(),
                    Input::make('service.rus_name')->title('Название'),
                    Group::make([
                        Input::make('service.rate')->title('Стоимость для покупателя (₽)'),
                        Input::make('service.jap_rate')->title('Стоимость в JAP ($)'),
                    ]),

                    Switcher::make('service.show')->title('Включить')->sendTrueOrFalse(),

                    Group::make([
                        Input::make('service.advantage.start')->title('Время начала'),
                        Input::make('service.advantage.quality')->title('Качество'),
                        Input::make('service.advantage.speed')->title('Скорость'),
                    ])->autoWidth(),

                    Group::make([
                        Button::make('Cохранить')->type(Color::SUCCESS())->method('save'),
                        Button::make('Удалить услугу')->type(Color::DANGER())->method('delete'),
                    ])->autoWidth()->alignStart()
                ])
            ])
        ];
    }

    public function save(Social $social, Category $category, Service $service, Request $request)
    {
        $newPrice = str_replace(['$', '₽'], '', $request->service['rate']);
        $service->rate = + $newPrice;
        $service->rus_name =$request->service['rus_name'];
        $service->show = $request->service['show'];
        $service->save();

        if($request->service['advantage']['start']
            && $request->service['advantage']['quality']
            && $request->service['advantage']['speed']) {
            $advantageData = $request->input('service.advantage');

            if ($service->advantage) {
                $service->advantage->update([
                    'start' => $advantageData['start'],
                    'quality' => $advantageData['quality'],
                    'speed' => $advantageData['speed'],
                ]);
            } else {
                $advantage = new Advantage([
                    'start' => $advantageData['start'],
                    'quality' => $advantageData['quality'],
                    'speed' => $advantageData['speed'],
                ]);
                $service->advantage()->save($advantage);
            }
        }

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.socials.categories.services', [$social->id, $category->id] );
    }
}
