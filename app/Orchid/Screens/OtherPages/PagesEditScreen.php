<?php

namespace App\Orchid\Screens\OtherPages;

use App\Models\AdditionalPage;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PagesEditScreen extends Screen
{
    public AdditionalPage $page;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(AdditionalPage $page): iterable
    {
        return [
            'page' => $page
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование страницы';
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
                Input::make('page.slug')->title('Slug страницы')->required(),
                Input::make('page.title')->title('Название страницы')->required(),
                Quill::make('page.text')->title('Содержимое страницы'),
                Group::make([
                    Button::make('Сохранить')->type(Color::SUCCESS())->method('save'),
                    Button::make('Удалить')->type(Color::DANGER())->method('delete')
                ])->autoWidth()->alignStart()
            ])
        ];
    }

    public function save(AdditionalPage $page, Request $request)
    {
        $page->slug = $request->page['slug'];
        $page->title = $request->page['title'];
        $page->text = $request->page['text'] ?? ' ';
        $page->save();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.pages');

    }

    public function delete(AdditionalPage $page)
    {
        $page->delete();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.pages');
    }
}
