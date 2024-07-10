<?php

namespace App\Orchid\Screens\Faq;

use App\Models\Social;
use Illuminate\Database\Eloquent\Collection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class FaqListScreen extends Screen
{
    public Collection $socials;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $socials = Social::all();
        return [
            'socials' => $socials
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Часто задаваемые вопросы';
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
                Link::make('Общие вопросы')->route('platform.faq.questions', 0)
            ]),
            Layout::table('socials', [
                TD::make('id'),
                TD::make('name'),
                TD::make('Вопросы')->render(fn(Social $social) =>
                    Link::make('Вопросы')->icon('question')->route('platform.faq.questions', $social)
                )
            ])->title('Вопросы по соцсетям')
        ];
    }
}
