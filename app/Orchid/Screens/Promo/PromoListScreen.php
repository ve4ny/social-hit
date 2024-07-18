<?php

namespace App\Orchid\Screens\Promo;

use App\Models\Promo;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use \Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

class PromoListScreen extends Screen
{
    public function query(): iterable
    {
        $promos = Promo::all();
        return [
            'promos' => $promos
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список промокодов';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Новый промокод')->route('platform.promo.new')->icon('plus')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('promos', [
                TD::make('id', 'ID')->render(function (Promo $promo) {
                    return $promo->id;
                }),
                TD::make('code', 'Промокод')->render(function (Promo $promo) {
                    return $promo->code;
                }),
                TD::make('coefficient', 'Скидка')->render(function (Promo $promo) {
                    return $promo->coefficient . '%';
                }),
                TD::make('expires', 'Действительно до')->render(function(Promo $promo) {
                   return Carbon::createFromFormat('Y-m-d', $promo->expires)->format('d.m.Y');
                }),
                TD::make('Действия')->render(fn(Promo $promo) =>
                    DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            ModalToggle::make('Удалить')
                                ->modal('deleteModal')
                                ->method('delete', [$promo->id])
                                ->icon('trash'),

                            Link::make('Редактировать')
                                ->icon('pencil')
                                ->route('platform.promo.edit', $promo->id),
                        ])
                ),
            ]),
            Layout::modal('deleteModal', [
                Layout::view('admin.promo')
            ])->title('Удалить промокод?')
                ->applyButton('Удалить')
                ->closeButton('Закрыть')

        ];
    }

    public function delete(Promo $promo)
    {
        $promo->delete();
        Alert::info('Промокод успешно удалён.');
    }
}
