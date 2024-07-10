<?php

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use App\Models\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class FaqQuestionEditScreen extends Screen
{
    public Faq $faq;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(int $socialId, Faq $faq): iterable
    {
        return [
            'socialId' => $socialId,
            'faq' => $faq
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование вопроса';
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
                TextArea::make('faq.question')->title('Вопрос')->required(),
                TextArea::make('faq.answer')->title('Ответ')->required(),
                Switcher::make('faq.publish')->title('Опубликовать')->sendTrueOrFalse(),

                Group::make([
                    Button::make('Cохранить')->type(Color::SUCCESS())->method('save'),
                    Button::make('Удалить вопрос')->type(Color::DANGER())->method('delete'),
                ])->autoWidth()->alignStart()
            ])
        ];
    }

    public function save(Request $request, int $social, Faq $faq = null )
    {
        if(!$faq) {
            $faq = new Faq();
        }
        $faq->social_id = $social !== 0 ? $social : null;
        $faq->question = $request->faq['question'];
        $faq->answer = $request->faq['answer'];
        $faq->publish = $request->faq['publish'];
        $faq->save();

        Alert::info('Изменения успешно сохранены.');
        return redirect()->route('platform.faq.questions', $social);

    }

    public function delete(Request $request, int $social, Faq $faq = null)
    {
        $faq?->delete();
        return redirect()->route('platform.faq.questions', $social);
    }
}
