<?php

namespace App\Orchid\Screens\Index\Blocks;

use App\Models\Block;
use Illuminate\Http\Request;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class IndexBlocksEditScreen extends Screen
{
    public Block $block;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Block $block): iterable
    {
        return [
            'block' => $block->load('attachment')
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование блока ' . $this->block->ident;
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
                Input::make('block.ident')->title('Идентификатор блока (slug)')->required(),
                Input::make('block.title')->title('Заголовок')->required(),
                TextArea::make('block.text')->title('Текст блока')->rows(5)->required(),
                Group::make([
                    Upload::make('block.attachment')->groups('pc')->title('Изображение')->maxFiles(1),
                    Upload::make('block.attachment')->groups('mobile')->title('Изображение для мобильной версии')->maxFiles(1),
                ])->autoWidth()->alignStart(),
                Group::make([
                    Button::make('Сохранить')->type(Color::SUCCESS())->method('save'),
                    Button::make('Удалить')->type(Color::DANGER())->method('delete'),
                ])->autoWidth()->alignStart()
            ])
        ];
    }

    public function save(Block $block, Request $request)
    {
        $block->ident = $request->block['ident'];
        $block->title = $request->block['title'];
        $block->text = $request->block['text'];
        $block->save();

        $block->attachment()->syncWithoutDetaching(
            $request->input('attachment', [])
        );

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.blocks');
    }

    public function delete(Block $block)
    {
        $block->delete();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.blocks');
    }
}
