<?php

namespace App\Orchid\Screens\PricesCheck;

use App\Models\Service;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PricesCheckEditScreen extends Screen
{
    public Service $service;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Service $service): iterable
    {
        $this->service = $service;
        return [
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
        return $this->service->rus_name ? $this->service->rus_name : $this->service->name;
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
            Layout::rows([
                Input::make('service.id')->type('hidden'),
                Input::make('service.name')->title('Название')->disabled(),
                Group::make([
                    Input::make('service.jap_old')->title('Старая цена JAP ($)')->disabled(),
                    Input::make('service.jap_rate')->title('Новая цена JAP ($)')->disabled(),
                    Input::make('service.rate')->title('Наша цена (₽)'),
                ]),
                Button::make('Сохранить')->type(Color::SUCCESS())->method('save')
            ])
        ];
    }

    public function save(Service $service, Request $request)
    {
        if ($service->rate !== $request->input('service.rate')) {
            $service->jap_old = 0;
        }
        $service->rate = $request->input('service.rate');
        $service->save();

        Alert::info('Цена была успешно обновлена.');
        return redirect()->route('platform.price-check');
    }
}
