<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Socials\SocialsListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Socials

Route::screen('socials', SocialsListScreen::class)
    ->name('platform.socials')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Соцальные сети'), route('platform.socials'))
    );

// Platform > Socials > Create

Route::screen('socials/create', \App\Orchid\Screens\Socials\CreateSocialScreen::class)
    ->name('platform.socials.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.socials')
        ->push(__('Новая социальная сеть'), route('platform.socials.create'))
    );

// Platform > Socials > Social

Route::screen('socials/{social}', \App\Orchid\Screens\Socials\EditSocialScreen::class)
    ->name('platform.socials.edit')
    ->breadcrumbs(fn(Trail $trail, $social) => $trail
    ->parent('platform.socials')
    ->push(__('Редактирование социальной сети'), route('platform.socials.edit', $social)));

// Platform > Socials > Categories

Route::screen('socials/{social}/categories', \App\Orchid\Screens\Categories\CategoriesListScreen::class)
    ->name('platform.socials.categories')
    ->breadcrumbs(fn(Trail $trail, $social) => $trail
        ->parent('platform.socials', $social)
        ->push($social->name, route('platform.socials.categories', $social)));

//Platform > Socials > Category

Route::screen('socials/{social}/{category}', \App\Orchid\Screens\Categories\EditCategoryScreen::class)
    ->name('platform.socials.category')
    ->breadcrumbs(fn(Trail $trail, $social, $category) => $trail
        ->parent('platform.socials.categories', $social)
        ->push($category->jap_name, route('platform.socials.category', ['social' => $social, 'category' => $category])));

// Platform > Socials > Categories > Services

Route::screen('socials/{social}/{category}/services', \App\Orchid\Screens\Services\ServicesListScreen::class)
    ->name('platform.socials.categories.services')
    ->breadcrumbs(fn(Trail $trail, $social, $category) => $trail
        ->parent('platform.socials.categories', $social)
        ->push($category->jap_name, route('platform.socials.category', ['social' => $social, 'category' => $category])));

// Platform > Socials > Categories > Service

Route::screen('socials/{social}/{category}/{service}', \App\Orchid\Screens\Services\EditServiceScreen::class)
    ->name('platform.socials.categories.service')
    ->breadcrumbs(fn(Trail $trail, $social, $category, $service) => $trail
        ->parent('platform.socials.categories.services', $social, $category)
        ->push(__('Услуга'), route('platform.socials.category', ['social' => $social, 'category' => $category, 'service' => $service])));

// Platform > FAQ

Route::screen('faq', \App\Orchid\Screens\Faq\FaqListScreen::class)
    ->name('platform.faq')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Категории FAQ'), route('platform.faq'))
    );

// Platform > FAQ > Questions

Route::screen('faq/questions/{social}', \App\Orchid\Screens\Faq\FaqQuestionsListScreen::class)
    ->name('platform.faq.questions')
    ->breadcrumbs(fn (Trail $trail, $social) => $trail
        ->parent('platform.faq', $social)
        ->push(__('Список вопросов'), route('platform.faq.questions', $social))
    );

// Platform > FAQ > New Question

Route::screen('faq/questions/{social?}/new-question', \App\Orchid\Screens\Faq\FaqQuestionEditScreen::class)
    ->name('platform.faq.new-question')
    ->breadcrumbs(fn (Trail $trail, $social) => $trail
        ->parent('platform.faq.questions', $social)
        ->push(__('Новый вопрос'), route('platform.faq.new-question', $social))
    );

// Platform > FAQ > Question

Route::screen('faq/questions/{social?}/{questionId?}', \App\Orchid\Screens\Faq\FaqQuestionEditScreen::class)
    ->name('platform.faq.question')
    ->breadcrumbs(fn (Trail $trail, $social) => $trail
        ->parent('platform.faq.questions', $social)
        ->push(__('Редактирование вопроса'), route('platform.faq.new-question', $social))
    );

// Platform > Brands

Route::screen('brands', \App\Orchid\Screens\Index\Brands\BrandsListScreen::class)
    ->name('platform.brands')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Cписок логотипов брендов на главной'), route('platform.brands'))
    );

// Platform > Brands > Create

Route::screen('brands/create', \App\Orchid\Screens\Index\Brands\BrandCreateScreen::class)
    ->name('platform.brands.create')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.brands')
        ->push(__('Добавление нового логотипа'), route('platform.brands.create'))
    );

// Platform > Brands > Brand

Route::screen('brands/{brand}', \App\Orchid\Screens\Index\Brands\BrandEditScreen::class)
    ->name('platform.brands.brand')
    ->breadcrumbs(fn(Trail $trail, $brand) => $trail
        ->parent('platform.brands')
        ->push(($brand), route('platform.brands.brand', $brand))
    );

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example screen'));

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', Idea::class, 'platform.screens.idea');
