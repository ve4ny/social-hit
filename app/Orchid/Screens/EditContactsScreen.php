<?php

namespace App\Orchid\Screens;

use App\Models\Contact;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EditContactsScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $contact = Contact::first();
        return [
            'contact' => $contact
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Обновление контактных данных';
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
                Input::make('contact.id')->hidden(),
                Input::make('contact.phone')->title('Телефон'),
                Input::make('contact.email')->title('Email'),
                TextArea::make('contact.address')->title('Адрес'),
                Button::make('Сохранить')->type(Color::PRIMARY())->method('save')
            ])
        ];
    }

    public function save(Request $request)
    {
        $data = $request->input('contact');
        $contact = Contact::find($data['id']);
        $contact->update($data);
        Toast::info(__('Контактные данные обновлены.'));
        return redirect()->route('platform.contacts');
    }
}
