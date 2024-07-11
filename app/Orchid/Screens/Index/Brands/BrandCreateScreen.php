<?php

namespace App\Orchid\Screens\Index\Brands;

use App\Models\Brand;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BrandCreateScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Добавление нового логотипа';
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
                Input::make('name')->title('Название')->required(),
                Upload::make('attachment')->title('Изображение')->required(),
                Button::make('Сохранить')->type(Color::SUCCESS())->method('save'),
            ])
        ];
    }

    public function save(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();

        // Присвоение вложений к посту
        $brand->attachment()->syncWithoutDetaching(
            $request->input('attachment', [])
        );

        Alert::info('Изменения успешно сохранены.');

        return redirect()->route('platform.brands');
    }
}
