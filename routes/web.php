<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\HeadImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainmenuController;
use App\Http\Controllers\NewzpicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegUserController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\WebsettingController;
use Illuminate\Support\Facades\Route;

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

Route::post('/signin', [LoginController::class, 'authenticate'])->name('signin');
Route::post('/resetpassword', [LoginController::class, 'resetpassword'])->name('resetpassword');
Route::post('/confirmpass', [LoginController::class, 'confirmpass'])->name('confirmpass');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forget', [LoginController::class, 'forget'])->name('forget');

//profile User Start

Route::get('/loadprofile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/updatepic', [ProfileController::class, 'profilepic'])->name('profiles.updatepic');
Route::post('/store', [ProfileController::class, 'store'])->name('profiles.store');
Route::put('/password', [ProfileController::class, 'password'])->name('profiles.password');

//profile User End

// Normal User Start

Route::get('/', [HomeController::class, 'index'])->name('normal.home');
Route::get('/signup', [HomeController::class, 'signup'])->name('normal.signup');
Route::get('/login', [HomeController::class, 'login'])->name('normal.login');
Route::post('/register', [HomeController::class, 'register'])->name('normal.register');

Route::post('/search', [HomeController::class, 'search'])->name('search.home');
Route::get('/get/{search}', [HomeController::class, 'getsearch'])->name('getsearch.home');

// Normal User End

// Register User Start

Route::get('/reguser/home', [RegUserController::class, 'index'])->name('register.home');

// Register User End

// Admin User Start

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/usercreate', [AdminController::class, 'usercreate'])->middleware('admin')->name('admin.usercreate');
Route::post('/admin/usercreate/usercreate', [AdminController::class, 'addusertype'])->middleware('admin')->name('admin.addusertype');

//Admin User list Action
Route::get('/admin/getnormaluserlist', [AdminController::class, 'getnormaluserlist'])->name('admin.getnormaluserlist');
Route::get('/admin/getnormaluserblacklist', [AdminController::class, 'getnormaluserblacklist'])->name('admin.getnormaluserblacklist');

Route::get('/admin/getsubadminlist', [AdminController::class, 'getsubadminlist'])->name('admin.getsubadminlist');
Route::get('/admin/getsubadminblacklist', [AdminController::class, 'getsubadminblacklist'])->name('admin.getsubadminblacklist');

Route::get('/admin/getadminlist', [AdminController::class, 'getadminlist'])->middleware('admin')->name('admin.getadminlist');
Route::get('/admin/getadminblacklist', [AdminController::class, 'getadminblacklist'])->middleware('admin')->name('admin.getadminblacklist');

Route::put('/admin/blacklistuser/user/{user}', [AdminController::class, 'blacklistuser'])->name('admin.blacklistuser');
Route::patch('/admin/activeuser/user/{user}', [AdminController::class, 'activeuser'])->name('admin.activeuser');

Route::get('/admin/resetpass/user/{user}', [AdminController::class, 'loadrestpass'])->middleware('admin')->name('admin.loadrestpass');
Route::post('/admin/passresetconfirm/user/{user}', [AdminController::class, 'passresetconfirm'])->middleware('admin')->name('admin.passresetconfirm');
// Admin User End

//Main Menu Start

Route::get('/admin/mainmenu/create', [MainmenuController::class, 'create'])->name('mainmenu.create');
Route::get('/admin/mainmenu/list', [MainmenuController::class, 'index'])->name('mainmenu.index');
Route::get('/admin/mainmenu/{mainmenu}/edit', [MainmenuController::class, 'edit'])->name('mainmenu.edit');
Route::put('/admin/mainmenu/{mainmenu}', [MainmenuController::class, 'update'])->name('mainmenu.update');
Route::post('/admin/mainmenu/store', [MainmenuController::class, 'store'])->name('mainmenu.store');
Route::delete('/admin/mainmenu/{mainmenu}', [MainmenuController::class, 'destroy'])->name('mainmenu.destroy');

// Active Disable
Route::put('/admin/disable/mainmenu/{mainmenu}/', [MainmenuController::class, 'disable'])->name('mainmenu.disable');
Route::patch('/admin/active/mainmenu/{mainmenu}/', [MainmenuController::class, 'active'])->name('mainmenu.active');
Route::get('/admin/mainmenu/disablelist', [MainmenuController::class, 'disablelist'])->name('mainmenu.disableindex');
//Main Menu End

//Sub Menu Start

Route::get('/admin/submenu/create', [SubmenuController::class, 'create'])->name('submenu.create');
Route::get('/admin/submenu/list', [SubmenuController::class, 'index'])->name('submenu.index');
Route::get('/admin/submenu/{submenu}/edit', [SubmenuController::class, 'edit'])->name('submenu.edit');
Route::put('/admin/submenu/{submenu}', [SubmenuController::class, 'update'])->name('submenu.update');
Route::post('/admin/submenu/store', [SubmenuController::class, 'store'])->name('submenu.store');

//Active Disable

Route::put('/admin/disable/submenu/{submenu}/', [SubmenuController::class, 'disable'])->name('submenu.disable');
Route::patch('/admin/active/submenu/{submenu}/', [SubmenuController::class, 'active'])->name('submenu.active');
Route::get('/admin/submenu/disablelist', [SubmenuController::class, 'disablelist'])->name('submenu.disableindex');

//Sub Menu End

// Head Image Start

Route::get('/admin/headimage/create', [HeadImageController::class, 'create'])->name('headimage.create');
Route::get('/admin/headimage/list', [HeadImageController::class, 'index'])->name('headimage.index');
Route::get('/admin/headimage/{headimage}/edit', [HeadImageController::class, 'edit'])->name('headimage.edit');
Route::put('/admin/headimage/{headimage}', [HeadImageController::class, 'update'])->name('headimage.update');
Route::post('/admin/headimage/store', [HeadImageController::class, 'store'])->name('headimage.store');
Route::delete('/admin/headimage/{headimage}', [HeadImageController::class, 'destroy'])->name('headimage.destroy');

// Active Disable
Route::get('/admin/status/headimage/{headimage}/{status}', [HeadImageController::class, 'status'])->name('headimage.status');

// Head Image End

// Newzpic Start

Route::get('/admin/newzpic/create', [NewzpicController::class, 'create'])->name('newzpic.create');
Route::get('/admin/newzpic/list', [NewzpicController::class, 'index'])->name('newzpic.index');
Route::get('/admin/newzpic/{newzpic}/edit', [NewzpicController::class, 'edit'])->name('newzpic.edit');
Route::put('/admin/newzpic/{newzpic}', [NewzpicController::class, 'update'])->name('newzpic.update');
Route::post('/admin/newzpic/store', [NewzpicController::class, 'store'])->name('newzpic.store');
Route::delete('/admin/newzpic/{newzpic}', [NewzpicController::class, 'destroy'])->name('newzpic.destroy');

// Active Disable
Route::get('/admin/status/newzpic/{newzpic}/{status}', [NewzpicController::class, 'status'])->name('newzpic.status');

// Newzpic End

// Advertisement Start

Route::get('/admin/advertise/create', [AdvertiseController::class, 'create'])->name('advertise.create');
Route::get('/admin/advertise/list', [AdvertiseController::class, 'index'])->name('advertise.index');
Route::get('/admin/advertise/{advertise}/edit', [AdvertiseController::class, 'edit'])->name('advertise.edit');
Route::put('/admin/advertise/{advertise}', [AdvertiseController::class, 'update'])->name('advertise.update');
Route::post('/admin/advertise/store', [AdvertiseController::class, 'store'])->name('advertise.store');
Route::delete('/admin/advertise/{advertise}', [AdvertiseController::class, 'destroy'])->name('advertise.destroy');

// Advertisement End

// Seo Start

Route::get('/admin/seo/create', [SeoController::class, 'create'])->name('seo.create');
Route::get('/admin/seo/list', [SeoController::class, 'index'])->name('seo.index');
Route::get('/admin/seo/{seo}/edit', [SeoController::class, 'edit'])->name('seo.edit');
Route::put('/admin/seo/{seo}', [SeoController::class, 'update'])->name('seo.update');
Route::post('/admin/seo/store', [SeoController::class, 'store'])->name('seo.store');
Route::delete('/admin/seo/{seo}', [SeoController::class, 'destroy'])->name('seo.destroy');

// Seo End

// Seo Start

Route::get('/admin/web/create', [WebsettingController::class, 'create'])->name('web.create');
Route::get('/admin/web/list', [WebsettingController::class, 'index'])->name('web.index');
Route::get('/admin/web/{web}/edit', [WebsettingController::class, 'edit'])->name('web.edit');
Route::put('/admin/web/{web}', [WebsettingController::class, 'update'])->name('web.update');
Route::post('/admin/web/store', [WebsettingController::class, 'store'])->name('web.store');
Route::delete('/admin/web/{web}', [WebsettingController::class, 'destroy'])->name('web.destroy');

// Seo End
