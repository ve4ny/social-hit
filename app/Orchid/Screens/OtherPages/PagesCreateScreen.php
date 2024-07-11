<?php

namespace App\Orchid\Screens\OtherPages;

use App\Models\AdditionalPage;
use Illuminate\Http\Request;
use \Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;

class PagesCreateScreen extends Screen
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
        return 'Новая страница';
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
                Input::make('slug')->title('Slug страницы')->required(),
                Input::make('title')->title('Название страницы')->required(),
                Quill::make('text')->title('Содержимое страницы'),
                Button::make('Сохранить')->type(Color::SUCCESS())->method('save')
            ])
        ];
    }

    public function save(Request $request)
    {
        $page = new AdditionalPage();
        $page->slug = $request->slug;
        $page->title = $request->title;
        $page->text = $request->text ?? ' ';
        $page->save();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.pages');
    }


}
