<?php

namespace App\Orchid\Screens\Services;

use App\Models\Category;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class ServicesListScreen extends Screen
{
    public Social $social;
    public Category $category;
    public Collection $services;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Social $social, Category $category): iterable
    {
        $services = Service::where('category_id', $category->id)->get()->unique('name');
        return [
            'social' => $social,
            'category' => $category,
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
        $name = $this->category->rus_name ? $this->category->rus_name : $this->category->jap_name;
        return 'Список услуг категории "' . $name . '"';
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
        $social = $this->social;
        $category = $this->category;

        return [
            Layout::table('services', [
                TD::make('name', 'Название в JAP')->width('35%'),
                TD::make('rus_name', 'Русское название')->width('35%'),
                TD::make('jap_rate', 'Стоимость в JAP')->render(fn($service) =>
                    $service->jap_rate  . '$'
                ),
                TD::make('rate', 'Стоимость')->render(fn($service) =>
                    $service->rate  . '$'
                ),
                TD::make('show', 'Включение')->render(fn($service) =>
                    $service->show ? 'Да' : '-'
                ),
                TD::make('Редактировать')->width('10%')->render(fn($service) =>
                Link::make('Редактировать')
                    ->icon('pencil')
                    ->route('platform.socials.categories.service', [$social->id, $category->id, $service->id]))
            ])
        ];
    }
}
