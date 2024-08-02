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
use App\Orchid\Screens\Promo\PromoEditScreen;
use App\Orchid\Screens\Promo\PromoListScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Socials\SocialsListScreen;
use App\Orchid\Screens\User\UserCreateScreen;
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

//Platform > Price Check List

Route::screen('price-check', \App\Orchid\Screens\PricesCheck\PricesCheckListScreen::class)
    ->name('platform.price-check')
    ->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
        ->push(__('Проверка цен'), route('platform.price-check'))
    );

// Platform > Price Check > Edit

Route::screen('price-check/{service}', \App\Orchid\Screens\PricesCheck\PricesCheckEditScreen::class)
    ->name('platform.price-check.edit')
    ->breadcrumbs(fn (Trail $trail, $service) => $trail
        ->parent('platform.price-check')
        ->push(__('Редактирование цены'), route('platform.price-check.edit', $service))
    );

// Platform > Promos

Route::screen('promos', PromoListScreen::class)
    ->name('platform.promos')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Промокоды'), route('platform.promos'))
    );

// Platform > Promos > Edit
Route::screen('promos/{promo}/edit', PromoEditScreen::class)
    ->name('platform.promo.edit')
    ->breadcrumbs(fn (Trail $trail, $promo) => $trail
        ->parent('platform.promos')
        ->push(__('Редактировать промокод'), route('platform.promo.edit', $promo))
    );

// Platform > Promos > New
Route::screen('promos/new', PromoEditScreen::class)
    ->name('platform.promo.new')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.promos')
        ->push(__('Новый промокод'), route('platform.promo.new'))
    );

// Platform > Orders

Route::screen('orders', \App\Orchid\Screens\Orders\OrdersListScreen::class)
    ->name('platform.orders')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Список заказов'), route('platform.orders'))
    );

// Platform > Edit

Route::screen('orders/{order}/edit', \App\Orchid\Screens\Orders\OrderEditScreen::class)
    ->name('platform.order.edit')
    ->breadcrumbs(fn (Trail $trail, $order) => $trail
        ->parent('platform.orders')
        ->push(__('Редактирование заказа'), route('platform.order.edit', $order))
    );

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

// Platform > Blocks

Route::screen('blocks', \App\Orchid\Screens\Index\Blocks\IndexBlocksListScreen::class)
    ->name('platform.blocks')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Cписок блоков'), route('platform.blocks'))
    );

// Platform > Blocks > Create

Route::screen('blocks/create', \App\Orchid\Screens\Index\Blocks\IndexBlocksCreateScreen::class)
    ->name('platform.blocks.create')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.blocks')
        ->push(__('Добавление нового блока'), route('platform.blocks.create'))
    );

// Platform > Blocks > Block

Route::screen('blocks/{block}', \App\Orchid\Screens\Index\Blocks\IndexBlocksEditScreen::class)
    ->name('platform.blocks.block')
    ->breadcrumbs(fn(Trail $trail, $block) => $trail
        ->parent('platform.blocks')
        ->push(__('Редактирование блока'), route('platform.blocks.block', $block))
    );

// Platform > Other Pages

Route::screen('pages', \App\Orchid\Screens\OtherPages\PagesListScreen::class)
    ->name('platform.pages')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Список страниц'), route('platform.pages'))
    );

// Platform > Other Pages > Create

Route::screen('pages/create', \App\Orchid\Screens\OtherPages\PagesCreateScreen::class)
    ->name('platform.pages.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.pages')
        ->push(__('Новая страница'), route('platform.pages.create'))
    );

// Platform > Other Pages > Page

Route::screen('pages/{page}', \App\Orchid\Screens\OtherPages\PagesEditScreen::class)
    ->name('platform.pages.edit')
    ->breadcrumbs(fn (Trail $trail, $page) => $trail
        ->parent('platform.pages')
        ->push(__('редактирование страницы'), route('platform.pages.create', $page))
    );

// Platform > Contacts

Route::screen('contacts', \App\Orchid\Screens\EditContactsScreen::class)
    ->name('platform.contacts')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Контакты'), route('platform.contacts'))
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
Route::screen('users/create', UserCreateScreen::class)
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
