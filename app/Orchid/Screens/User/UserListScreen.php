<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Models\Balance;
use App\Models\Order;
use App\Models\RefBalance;
use App\Models\UserDetails;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserFiltersLayout;
use App\Orchid\Layouts\User\UserListLayout;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class UserListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $query = User::with(['details', 'balance', 'roles'])
            ->select('*')
            ->selectRaw('(SELECT COUNT(*) FROM role_users ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = users.id AND r.name = "admin") as is_admin');

        if (request()->has('sort') && request()->query('sort') == 'is_admin') {
            $direction = request()->query('order', 'desc');
            $query->orderBy('is_admin', $direction);
        } else if (request()->has('sort') && request()->query('sort') == '-is_admin'){
            $direction = request()->query('order', 'asc');
            $query->orderBy('is_admin', $direction);
        }

        return [
            'users' => $query->filters(UserFiltersLayout::class)->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'User';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'All registered users';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.systems.users.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('users', [
                TD::make('id', __('ID'))->sort(),
                TD::make('is_admin', __('Админ'))
                    ->sort()
                    ->render(function (User $user) {
                        return $user->is_admin ? 'Да' : '-';
                    }),
//                TD::make(__('Админ'))->render(fn($user) =>
//                $user->roles->isNotEmpty() ? ($user->roles->first()->name === 'admin' ? 'Да' : '-')  : '-'
//                )->sort(),
                TD::make('name', __('Имя'))->sort()->filter(Input::make()),
                TD::make('email', __('Email'))->sort()->filter(Input::make()),
                TD::make('user.balance.amount', __('Баланс'))->render(fn($user) =>
                    $user->balance->amount . ' ₽'
                ),
                TD::make('Действия')->render(fn(User $user) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make('Редактировать')
                            ->route('platform.systems.users.edit', $user->id)
                            ->icon('pencil'),
                        ModalToggle::make('Удалить')
                            ->modal('deleteModal')
                            ->method('delete', [$user->id])
                            ->icon('trash'),
                    ])
                ),
            ]),
            Layout::modal('deleteModal', [
                Layout::view('admin.promo')
            ])->title('Удалить пользователя?')
                ->applyButton('Удалить')
                ->closeButton('Закрыть')
        ];
    }

    /**
     * @param User $user
     * @throws Exception
     */
    public function delete(User $user): void
    {
        $user->delete();
        Alert::info('Пользователь успешно удалён.');
    }
}
