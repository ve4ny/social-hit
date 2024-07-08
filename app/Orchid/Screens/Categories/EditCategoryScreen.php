<?php

namespace App\Orchid\Screens\Categories;

use App\Models\Category;
use App\Models\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class EditCategoryScreen extends Screen
{
    public Social $social;
    public Category $category;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Social $social, Category $category): iterable
    {
        return [
            'social' => $social,
            'category' => $category->load('attachment')
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактировать категорию';
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
            Layout::columns([
                Layout::rows([
                    Input::make('category.jap_name')->title('Название в JustAnotherPanel')->disabled(),
                    Input::make('category.rus_name')->title('Название для отображения'),
                    Group::make([
                        Upload::make('category.attachment')
                            ->title('Attachment'),
                    ]),
                    Group::make([
                        Switcher::make('category.show')->title('Включить')->sendTrueOrFalse(),
                        Switcher::make('category.main_show')->title('Показывать на главной')->sendTrueOrFalse()
                    ]),
                    Group::make([
                        Button::make('Cохранить')->type(Color::SUCCESS())->method('save'),
                        Button::make('Удалить категорию')->type(Color::DANGER())->method('delete'),
                    ])->autoWidth()->alignStart()
                ])
            ])
        ];
    }

    public function save(Social $social, Category $category, Request $request)
    {
        $data = $request->category;
        $data['rus_name'] = $data['rus_name'] ?? '';
        $category->fill($data);
        $category->save();

        $category->attachment()->syncWithoutDetaching(
            $request->input('category.attachment', [])
        );
        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.socials.categories', $category->social_id);
    }

    public function delete(Social $social, Category $category)
    {
        $category->delete();
        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.socials.categories', $category->social_id);
    }
}
