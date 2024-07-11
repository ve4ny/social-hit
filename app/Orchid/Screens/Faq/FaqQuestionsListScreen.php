<?php

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use App\Models\Social;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class FaqQuestionsListScreen extends Screen
{
    public int $socialId;
    public string $socialName;
    public Collection $faqs;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(int $socialId): iterable
    {
        $socialName = $socialId !== 0 ? Social::find($socialId)->name : '';
        $faqs = Faq::where('social_id', $socialId !== 0 ? $socialId : null)->get();
        return [
            'socialId' => $socialId,
            'socialName' => $socialName,
            'faqs' => $faqs
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->socialName === '' ? 'Список общих вопросов' : 'Список вопросов для соцсети ' . $this->socialName;
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Новый вопрос')
                ->icon('plus')
                ->route('platform.faq.new-question', $this->socialId)
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
            Layout::table('faqs', [
                TD::make('id'),
                TD::make('question'),
                TD::make('answer'),
                TD::make('publish', 'Отображение')->render(fn(Faq $faq) =>
                $faq->publish ? 'Да' : '-'
                ),
                TD::make(__('Редактировать'))->render(fn(Faq $faq) =>
                    Link::make('Редактировать')->icon('pencil')->route('platform.faq.question', [$this->socialId, $faq->id])
                )
            ])
        ];
    }
}
