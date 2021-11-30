<?php

use App\Http\Controllers\Auth\MyLoginController;
use App\Http\Controllers\FontPageController;
use App\Http\Controllers\PrivateAccessController;
use Illuminate\Support\Facades\Http;
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
/*Route::get('/myf',function(){
return response()->download(public_path('app/images/bg.png'));
});*/
Route::get('getCruds',function(){
//$response=Http::get('http://127.0.0.1:8000/api/cruds');
//dd($response->json());

});



Route::get('/', FontPageController::class);
Route::resource('contacts',App\Http\Controllers\ContactController::class)->only('store');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('access/{file}',PrivateAccessController::class)->name('file');
Route::get('/login',[MyLoginController::class,'index'])->name('login');
Route::post('/login',[MyLoginController::class,'authenticate'])->name('login.store');
Route::group(['middleware'=>'auth'],function(){
    Route::get('access/{file}',PrivateAccessController::class)->name('file');
    
    Route::get('cruds/search',[App\Http\Controllers\CrudSearchController::class,'index'])->name('cruds.search');
    Route::resource('cruds',App\Http\Controllers\CrudController::class);
    Route::get('price_pdf',App\Http\Controllers\PricePdfController::class)->name('price_pdf');
    Route::get('price_export_excel',[App\Http\Controllers\PriceExcelController::class,'exportExcel'])->name('price_export_excel');
    Route::get('price_export_csv',[App\Http\Controllers\PriceExcelController::class,'exportCsv'])->name('price_export_csv');
    Route::post('price_import_excel',[App\Http\Controllers\PriceExcelController::class,'import'])->name('price_import_excel');
    Route::get('prices/excel/create',[App\Http\Controllers\PriceExcelController::class,'importForm'])->name('prices.excel.create');
    Route::get('users/search',[App\Http\Controllers\UserSearchController::class,'index'])->name('users.search');
    Route::get('headers/search',[App\Http\Controllers\HeaderSearchController::class,'index'])->name('headers.search');
    Route::get('page_titles/search',[App\Http\Controllers\PageTitleHeaderSearchController::class,'index'])->name('page_titles.search');
    Route::get('menu_items/search',[App\Http\Controllers\MenuItemSearchController::class,'index'])->name('menu_items.search');
    Route::get('teams/search',[App\Http\Controllers\TeamSearchController::class,'index'])->name('teams.search');
    Route::get('prices/search',[App\Http\Controllers\PriceSearchController::class,'index'])->name('prices.search');
    Route::get('testimonies/search',[App\Http\Controllers\TestimonySearchController::class,'index'])->name('testimonies.search');
    Route::get('blogs/search',App\Http\Controllers\BlogSearchController::class)->name('blogs.search');
    Route::get('fsections/search',[App\Http\Controllers\FsectionSearchController::class,'index'])->name('fsections.search');
    Route::get('galleries/search',[App\Http\Controllers\GallerySearchController::class,'index'])->name('galleries.search');
    Route::get('contacts/search',[App\Http\Controllers\ContactSearchController::class,'index'])->name('contacts.search');
    Route::get('footer_links/search',[App\Http\Controllers\FooterLinkSearchController::class,'index'])->name('footer_links.search');
    Route::get('ssections/search',[App\Http\Controllers\SsectionSearchController::class,'index'])->name('ssections.search');
    Route::get('ssection_items/search',[App\Http\Controllers\SsectionItemSearchController::class,'index'])->name('ssection_items.search');
    Route::get('messages/search',[App\Http\Controllers\MessageSearchController::class,'index'])->name('messages.search');
    Route::resource('users',App\Http\Controllers\UserController::class);
    Route::resource('fsections',App\Http\Controllers\FsectionController::class);
    Route::resource('blogs',App\Http\Controllers\BlogController::class);
    Route::resource('testimonies',App\Http\Controllers\TestimonyController::class);
    Route::resource('headers',App\Http\Controllers\HeaderController::class);
    Route::resource('users',App\Http\Controllers\UserController::class);
    Route::resource('teams',App\Http\Controllers\TeamController::class);
    Route::resource('prices',App\Http\Controllers\PriceController::class);
    Route::resource('categories',App\Http\Controllers\CategoryController::class)->except(['edit','update']);
    Route::resource('menu_items',App\Http\Controllers\MenuItemController::class);
    Route::resource('galleries',App\Http\Controllers\GalleryController::class);
    Route::resource('contacts',App\Http\Controllers\ContactController::class)->only('index','show','destroy');
    Route::resource('messages',App\Http\Controllers\MessageController::class)->except('edit','update');
    Route::resource('ssections',App\Http\Controllers\SsectionController::class);
    Route::resource('page_titles',App\Http\Controllers\PageTitleHeaderController::class);
    Route::resource('ssection_items',App\Http\Controllers\SsectionItemController::class);
    Route::resource('footer_links',App\Http\Controllers\FooterLinkController::class);
    Route::resource('food_menus',App\Http\Controllers\FoodMenuController::class);
    Route::get('logos/edit',[App\Http\Controllers\LogoController::class,'edit'])->name('logos.edit');
    Route::put('logos',[App\Http\Controllers\LogoController::class,'update'])->name('logos.update');
    Route::get('footer_descs/edit',[App\Http\Controllers\FooterDescController::class,'edit'])->name('footer_descs.edit');
    Route::put('footer_descs',[App\Http\Controllers\FooterDescController::class,'update'])->name('footer_descs.update');
    Route::put('footer_subs',[App\Http\Controllers\FooterSubController::class,'update'])->name('footer_subs.update');
    Route::get('footer_subs',[App\Http\Controllers\FooterSubController::class,'edit'])->name('footer_subs.edit');
    Route::get('footer_contacts/edit',[App\Http\Controllers\FooterContactController::class,'edit'])->name('footer_contacts.edit');
    Route::put('footer_contacts',[App\Http\Controllers\FooterContactController::class,'update'])->name('footer_contacts.update');
    Route::post('/logout',[MyLoginController::class,'logout'])->name('logout');
});
