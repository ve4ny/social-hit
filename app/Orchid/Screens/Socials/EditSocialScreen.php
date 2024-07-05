<?php

namespace App\Orchid\Screens\Socials;

use App\Models\Social;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class EditSocialScreen extends Screen
{

    public Social $social;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Social $social): iterable
    {
        return [
            'social' => $social->load('attachment'),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->social->name;
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
                        ->required(),

                    Group::make([
                        Upload::make('social.attachment')
                            ->title('Attachment'),
                    ]),

                    Group::make([
                        Button::make('Сохранить')
                            ->method('save')
                            ->type(Color::DEFAULT()),

                        Button::make('Удалить')
                            ->method('delete')
                            ->type(Color::DANGER()),
                    ])->autoWidth(),
                ]),


            ])
        ];
    }

    public function save(Social $social, Request $request): RedirectResponse
    {
        $social->fill($request->get('social'))->save();

        // Присвоение вложений к посту
        $social->attachment()->syncWithoutDetaching(
            $request->input('social.attachment', [])
        );

        Alert::info('Изменения успешно сохранены.');

        return redirect()->route('platform.socials');
    }

    public function delete(Social $social): RedirectResponse
    {
        $social->delete();
        Alert::info('Изменения успешно сохранены.');

        return redirect()->route('platform.socials');
    }
}
