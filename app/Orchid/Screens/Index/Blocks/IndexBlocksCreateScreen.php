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

class IndexBlocksCreateScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Создание инфо блока на главной странице';
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
                Input::make('ident')->title('Идентификатор блока (slug)')->required(),
                Input::make('title')->title('Заголовок')->required(),
                TextArea::make('text')->title('Текст блока')->required(),
                Group::make([
                    Upload::make('attachment')->groups('pc')->title('Изображение')->maxFiles(1)->acceptedFiles('image/*'),
                    Upload::make('attachment')->groups('mobile')->title('Изображение для мобильной версии')->maxFiles(1)->acceptedFiles('image/*'),
                ])->autoWidth()->alignStart(),
                Button::make('Сохранить')->type(Color::SUCCESS())->method('save')
            ])
        ];
    }

    public function save(Request $request)
    {
        $block = new Block();
        $block->ident = $request->ident;
        $block->title = $request->title;
        $block->text = $request->text;
        $block->save();

        $block->attachment()->syncWithoutDetaching(
            $request->input('attachment', [])
        );


        Alert::info('Изменения успешно сохранены.');

        return redirect()->route('platform.blocks');
    }
}
