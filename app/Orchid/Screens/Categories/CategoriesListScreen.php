<?php

namespace App\Orchid\Screens\Categories;

use App\Models\Category;
use App\Models\Social;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

class CategoriesListScreen extends Screen
{
    public Social $social;
    public Collection $categories;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Social $social): iterable
    {
        $categories = Category::where('social_id', $social->id)->orderBy('main_show', 'desc')->get();
        return [
            'social' => $social,
            'categories' => $categories
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список категорий соцсети ' . $this->social->name;
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
        return [
            Layout::table('categories', [
                TD::make('id'),
                TD::make('jap_name', 'Название')->width('30%'),
                TD::make('rus_name', 'Русское название')->width('30%'),
                TD::make('main_show', 'Показывать на главной')->width('10%')->render(fn($category) =>
                $category->main_show ? 'Да' : '-'),
                TD::make('Список услуг')->render(fn($category) =>
                Link::make('Услуги')
                    ->icon('list')
                    ->route('platform.socials.categories.services', [$social->id, $category->id])),
                TD::make('Редактировать')->width('10%')->render(fn($category) =>
                    Link::make('Редактировать')
                        ->icon('pencil')
                        ->route('platform.socials.category', [$social->id, $category->id]))
            ])
        ];
    }
}
