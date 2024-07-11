<?php

namespace App\Orchid\Screens\Index\Brands;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class BrandsListScreen extends Screen
{
    public Collection $brands;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $brands = Brand::with('attachment')->get();
        return [
            'brands' => $brands
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Логотипы брендов на главной странице';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Новый логотип')
                ->icon('plus')
                ->route('platform.brands.create')
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
            Layout::table('brands', [
                TD::make('id'),
                TD::make('name'),
                TD::make(__('Редактировать'))->render(fn(Brand $brand) =>
                    Link::make(__('Редактировать'))->icon('pencil')->route('platform.brands.brand', mb_strtolower($brand->name)))
            ])
        ];
    }
}
