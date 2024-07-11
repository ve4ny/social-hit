<?php

namespace App\Orchid\Screens\Index\Blocks;

use App\Models\Block;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class IndexBlocksListScreen extends Screen
{
    public Collection $blocks;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $blocks = Block::all();
        return [
            'blocks' => $blocks
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Инфо блоки на главной странице';
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
            Layout::table('blocks', [
                TD::make('ident'),
                TD::make('title'),
                TD::make('text')->width('50%'),
                TD::make(__('Редактировать'))->render(fn(Block $block) =>
                    Link::make('Редактировать')->icon('pencil')->route('platform.blocks.block', $block))
            ])
        ];
    }
}
