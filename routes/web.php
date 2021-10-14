<?php

use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Lock;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Index;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404')



;
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');

    /**
     * By Jong
     */
    Route::get('/myroom', [\App\Http\Controllers\VMyRoomController::class, 'index'])->name('myroom');
    Route::get('/myroom/message', [\App\Http\Controllers\VMyRoomController::class, 'message'])->name('message');
    Route::get('/myroom/goods_alarm/alarm_sell_list', [\App\Http\Controllers\VMyRoomController::class, 'alarm_sell_list'])->name('alarm_sell_list');
    Route::get('/myroom/complete/sell', [\App\Http\Controllers\VMyRoomController::class, 'complete_sell'])->name('complete_sell');
    Route::get('/myroom/complete/cancel_sell', [\App\Http\Controllers\VMyRoomController::class, 'complete_cancel_sell'])->name('complete_cancel_sell');


    Route::get('/myroom/sell/sell_regist', [\App\Http\Controllers\VMyRoomController::class, 'sell_regist'])->name('sell_regist');
    Route::get('/myroom/sell/sell_regist_view', [\App\Http\Controllers\VMyRoomController::class, 'sell_regist_view'])->name('sell_regist_view');
    Route::get('/myroom/sell/sell_re_reg', [\App\Http\Controllers\VMyRoomController::class, 'sell_re_reg'])->name('sell_re_reg');

    Route::get('/myroom/buy/buy_regist', [\App\Http\Controllers\VMyRoomController::class, 'buy_regist'])->name('buy_regist');
    Route::get('/myroom/buy/buy_regist_view', [\App\Http\Controllers\VMyRoomController::class, 'buy_regist_view'])->name('buy_regist_view');
    Route::get('/myroom/buy/buy_re_reg', [\App\Http\Controllers\VMyRoomController::class, 'buy_re_reg'])->name('buy_re_reg');

    Route::get('/sell', [\App\Http\Controllers\VSellController::class, 'index'])->name('sell');
    Route::get('/sell/index_view', [\App\Http\Controllers\VSellController::class, 'index_view'])->name('sell_index_view');
    Route::get('/sell/list_search', [\App\Http\Controllers\VSellController::class, 'list_search'])->name('sell_list_search');
    Route::get('/sell/view', [\App\Http\Controllers\VSellController::class, 'sell_view'])->name('sell_view');
    Route::get('/sell/application', [\App\Http\Controllers\VSellController::class, 'sell_application'])->name('sell_application');


    Route::get('/sell/fixed_trade_subject', [\App\Http\Controllers\VSellController::class, 'fixed_trade_subject'])->name('fixed_trade_subject');
    Route::get('/user/contact_edit', [\App\Http\Controllers\VSellController::class, 'user_contact_edit']);

    Route::get('/buy', [\App\Http\Controllers\VBuyController::class, 'index'])->name('buy');
    Route::get('/buy/index_view', [\App\Http\Controllers\VBuyController::class, 'index_view'])->name('buy_index_view');
    Route::get('/buy/list_search', [\App\Http\Controllers\VBuyController::class, 'list_search'])->name('buy_list_search');

    Route::get('/certify/payment/user_certify', [\App\Http\Controllers\VCertifyController::class, 'user_certify'])->name('user_certify');
});

/**
 * By Jong
 */
Route::get('/index', [\App\Http\Controllers\VMainController::class, 'index'])->name('index');
Route::get('/character', [\App\Http\Controllers\VChrController::class, 'index'])->name('character');
Route::get('/event', [\App\Http\Controllers\VEventController::class, 'index'])->name('event');
Route::get('/guide', [\App\Http\Controllers\VGuideController::class, 'index'])->name('guide');

