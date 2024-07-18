<?php

namespace App\Orchid\Screens\Promo;

use App\Models\Promo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PromoEditScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Promo $promo = null): iterable
    {
        if (is_null($promo)) {
            $promo = new Promo();
        }
        return [
            'promo' => $promo
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактировать промокод';
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
                Input::make('promo.code')->title('Промокод'),
                Input::make('promo.coefficient')->title('Скидка'),
                DateTimer::make('promo.expires')
                    ->title('Действительна до:')
                    ->format('Y-m-d'),
                Group::make([
                    Button::make('Cохранить')->type(Color::SUCCESS())->method('save'),
                ])->autoWidth()->alignStart()
            ]),
        ];
    }

    public function save(Promo $promo, Request $request)
    {
        $promo->fill($request->promo);
        $promo->save();
        Alert::info('Изменения успешно сохранены');
        return redirect()->route('platform.promos');
    }
}
