<?php

namespace App\Orchid\Screens\Services;

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
        $service->rate = $service->rate / 100 . '$';
        $service->jap_rate = $service->jap_rate / 100 . '$';
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
                    Group::make([
                        Input::make('service.rate')->title('Стоимость для покупателя'),
                        Input::make('service.jap_rate')->title('Стоимость в JAP'),
                    ]),

                    Switcher::make('service.show')->title('Включить')->sendTrueOrFalse(),

                    Group::make([
                        Button::make('Cохранить')->type(Color::SUCCESS())->method('save'),
                        Button::make('Удалить категорию')->type(Color::DANGER())->method('delete'),
                    ])->autoWidth()->alignStart()
                ])
            ])
        ];
    }

    public function save(Social $social, Category $category, Service $service, Request $request)
    {
        $newPrice = str_replace(['.',',','$'], '', $request->service['rate']);
        $service->rate = $newPrice;
        $service->show = $request->service['show'];
        $service->save();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.socials.categories.services', [$social->id, $category->id] );
    }
}
