<?php

namespace App\Orchid\Screens;

use App\Actions\Services\PricesUpdateAction;
use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class PricesCheckListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $services = Service::where('show', 1)
            ->whereNot('jap_old', 0)
            ->with('category.social')
            ->orderByDesc('updated_at')
            ->paginate(25);
        return [
            'services' => $services
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Изменения цен';
    }

    public function description(): ?string
    {
        return 'Список услуг, цены на которые не менялись после их повышения на JAP.';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Проверить сейчас')->method('checkPrices')->icon('refresh'),
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
            Layout::table('services', [
                    TD::make('name', 'Название в JAP')->width('35%'),
                    TD::make('rus_name', 'Русское название')->width('35%'),
                    TD::make('jap_old', 'Старая цена JAP')->render(fn($service) =>
                        $service->jap_old . '$'
                    ),
                    TD::make('jap_rate', 'Новая цена JAP')->render(fn($service) =>
                        $service->jap_rate  . '$'
                    ),
                    TD::make('rate', 'Наша цена')->render(fn($service) =>
                        $service->rate  . '₽'
                    ),
                    TD::make('Ред.')->width('10%')->render(fn($service) =>
                    Link::make('')
                        ->icon('pencil')
                        ->route('platform.socials.categories.service', [$service->category->social_id, $service->category_id, $service->id]))
                ]
            )
        ];
    }

    public function checkPrices() {
        $checkPrices = new PricesUpdateAction();
        $checked = $checkPrices->handle();
        if($checked) {
            return redirect()->to('platform.check-prices');
        }
    }
}
