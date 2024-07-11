<?php

namespace App\Orchid\Screens\Index\Brands;

use App\Models\Brand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BrandEditScreen extends Screen
{
    public Brand $brand;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(string $brandName): iterable
    {
        $brand = Brand::where('name', $brandName)->with('attachment')->first();
        return [
            'brand' => $brand
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактировать логотип ' . $this->brand->name;
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
                Input::make('brand.id')->hidden(),
                Input::make('brand.name')->title('Название')->required(),
                Upload::make('brand.attachment')->title('Изображение')->maxFiles(1)->required(),
                Group::make([
                    Button::make('Сохранить')
                        ->method('save')
                        ->type(Color::SUCCESS()),

                    Button::make('Удалить')
                        ->method('delete')
                        ->type(Color::DANGER()),
                ])->autoWidth(),
            ])
        ];
    }

    public function save(Request $request): RedirectResponse
    {
        $brand = Brand::find($request->brand['id']);
        $brand->name = $request->brand['name'];
        $brand->save();
        $brand->attachment()->syncWithoutDetaching(
            $request->input('brand.attachment', [])
        );

        Alert::info('Изменения успешно сохранены.');

        return redirect()->route('platform.brands');
    }

    public function delete(Request $request): RedirectResponse
    {
        $brand = Brand::find($request->brand['id']);
        $brand->delete();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.brands');
    }
}
