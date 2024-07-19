<?php

namespace App\Orchid\Screens\Orders;

use App\Models\Order;
use App\Models\Promo;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class OrdersListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $orders = Order::with('user')->get();

        foreach($orders as $o) {
            switch($o->status){
                case 'In progress':
                case 'Pending':
                    $o->status = 'В процессе';
                    break;
                case 'Completed':
                    $o->status = 'Завершено';
                    break;
                case 'Partial':
                    $o->status = 'Частично';
                    break;
                default: break;
            }
        }
        return [
            'orders' => $orders
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список заказов';
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
            Layout::table('orders', [
                TD::make('id'),
                TD::make('jap_id', 'Заказ в JAP'),
                TD::make('user.name', 'Пользователь'),
                TD::make('quantity', 'Количество'),
                TD::make('sum', 'Стоимость')->render(fn($order) =>
                    $order->sum . '₽'
                ),
                TD::make('link', 'Ссылка')->render(fn($order) =>
                    Link::make('')->icon('link')->href($order->link)->target('_blank')
                ),
                TD::make('status', 'Статус')->render(fn($order) =>
                    $order->status === 'В процессе' ? '<span style="color: #00c4cb">' . $order->status . '</span>' : ($order->status === 'Завершено' ? '<span style="color: #14cb00">' .  $order->status . '</span>' : '<span style="color: red">' .$order->status .'</span>')
                ),
                TD::make('Действия')->render(fn(Order $order) =>
                DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        ModalToggle::make('Удалить')
                            ->modal('deleteModal')
                            ->method('delete', [$order->id])
                            ->icon('trash'),
                    ])
                ),
            ]),
            Layout::modal('deleteModal', [
                Layout::view('admin.promo')
            ])->title('Удалить заказ?')
                ->applyButton('Удалить')
                ->closeButton('Закрыть')
        ];
    }

    public function delete(Order $order)
    {
        $order->delete();
        Alert::info('Заказ успешно удалён.');
    }
}
