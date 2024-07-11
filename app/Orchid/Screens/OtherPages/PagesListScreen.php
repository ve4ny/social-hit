<?php

namespace App\Orchid\Screens\OtherPages;

use App\Models\AdditionalPage;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class PagesListScreen extends Screen
{
    public Collection $pages;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $pages = AdditionalPage::all();
        return [
            'pages' => $pages
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список сраниц';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Новая страница')->icon('plus')->route('platform.pages.create')
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
            Layout::table('pages', [
                TD::make('id'),
                TD::make('slug'),
                TD::make('title'),
                TD::make(__('Редактировать'))->render(fn(AdditionalPage $page) =>
                    Link::make('Редактировать')->icon('pencil')->route('platform.pages.edit', $page))
            ])
        ];
    }
}
