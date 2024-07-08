<?php

namespace App\Orchid\Screens\Socials;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Social;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;

class SocialsListScreen extends Screen
{
    protected Collection $socials;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $socials = Social::with('attachment')->get();
        return [
            'socials' => $socials,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список социальных сетей';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить')
                ->icon('plus')
                ->route('platform.socials.create')
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
            Layout::table('socials', [
                TD::make('id'),
                TD::make('name'),
                TD::make('Список категорий')->render(fn(Social $social) =>
                Link::make('Категории')
                    ->icon('list')
                    ->route('platform.socials.categories', $social->id)),
                TD::make('Редактировать')->render(fn(Social $social) =>
                Link::make('Редактировать')
                    ->icon('pencil')
                    ->route('platform.socials.edit', $social->id))
            ])
        ];
    }
}
