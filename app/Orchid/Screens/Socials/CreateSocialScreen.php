<?php

namespace App\Orchid\Screens\Socials;

use App\Actions\Images\SaveImage;
use App\Models\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CreateSocialScreen extends Screen
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
        return 'Добавление новой социальной сети';
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
                    Input::make('social.name')
                        ->title('Название социальной сети')
                        ->value("")
                        ->required(),

                    Upload::make('attachment')
                        ->title('Загрузите изображение')
                        ->horizontal(),

                    Button::make('Создать')
                        ->method('createButtonHandle')
                        ->type(Color::DEFAULT()),
                ])
            ])
        ];
    }

    public function createButtonHandle(Social $social, Request $request)
    {
        $social->fill($request->get('social'))->save();

        // Присвоение вложений к посту
        $social->attachment()->syncWithoutDetaching(
            $request->input('attachment', [])
        );

        Alert::info('Изменения успешно сохранены.');

        return redirect()->route('platform.socials');
    }
}
