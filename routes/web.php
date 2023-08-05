<?php

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

Route::get('/', function () {
    return view('User.index');
});


/*
Route::get('/login', function () {
    return view('Admin.login');
})->name('login');
*/


Route::get('/', 'UserHomeController@index')->name('landingPage');

Route::get('/about', 'UserHomeController@about')->name('aboutUser');

Route::get('/faq', 'UserHomeController@faq')->name('faqUser');

Route::post('/produk/ProdukLain/{title}', 'UserHomeController@produklain')->name('user.produklain');

Route::get('/produk/produkDetail/{title}', 'UserHomeController@produkdetail')->name('user.produkdetail');


/*
Di bawah Ini Routes Buat Home Dashboard Admin!
*/

Auth::routes([
    // 'register' => false,
    'reset' => false,
]);

Route::get('/home', 'AdminHomeController@index')->name('home');
Route::get('/helpPage', 'AdminHomeController@helpPage')->name('helpPage');

/*
Di bawah Ini Routes Buat Admin Kategori!
*/


Route::get('/adminCategory', 'AdminCategoryController@index')->name('adminCategory');

Route::get('/adminCategory/create', 'AdminCategoryController@create')->name('adminCategory.create');

Route::post('/adminCategory', 'AdminCategoryController@store')->name('adminCategory.store');

Route::post('/adminCategory/delete/{id}', 'AdminCategoryController@destroy')->name('adminCategory.destroy');

Route::get('/adminCategory/edit/{id}', 'AdminCategoryController@edit')->name('adminCategory.edit');

Route::post('/adminCategory/{id}', 'AdminCategoryController@update')->name('adminCategory.update');

Route::get('/adminCategory/search', 'AdminCategoryController@search')->name('adminCategory.search');

Route::get('/adminCategory/Article/{title}', 'AdminCategoryController@indexArticles')->name('category.article');


/*
Di bawah Ini Routes Buat Admin Article
*/
Route::get('/adminArticle', 'AdminArticleController@index')->name('adminArticle');

Route::get('/adminArticle/create', 'AdminArticleController@create')->name('adminArticle.create');

Route::post('/adminArticle', 'AdminArticleController@store')->name('adminArticle.store');

Route::post('/adminArticle/delete/{id}', 'AdminArticleController@destroy')->name('adminArticle.destroy');

Route::get('/adminArticle/edit/{id}', 'AdminArticleController@edit')->name('adminArticle.edit');

Route::post('/adminArticle/{id}', 'AdminArticleController@update')->name('adminArticle.update');

Route::get('/adminArticle/search', 'AdminArticleController@search')->name('adminArticle.search');

Route::get('/adminArticle/GaleriPL/{title}', 'AdminArticleController@prodgaleri')->name('galeri.article');

/*
Di bawah Ini Routes Buat Admin Galeri Website!
*/
Route::get('/adminGaleriPL', 'AdminGaleriPLController@index')->name('adminGaleriPL');

Route::get('/adminGaleriPL/create', 'AdminGaleriPLController@create')->name('adminGaleriPL.create');

Route::post('/adminGaleriPL', 'AdminGaleriPLController@store')->name('adminGaleriPL.store');

Route::post('/adminGaleriPL/delete/{id}', 'AdminGaleriPLController@destroy')->name('adminGaleriPL.destroy');

Route::get('/adminGaleriPL/edit/{id}', 'AdminGaleriPLController@edit')->name('adminGaleriPL.edit');

Route::post('/adminGaleriPL/{id}', 'AdminGaleriPLController@update')->name('adminGaleriPL.update');

Route::get('/adminGaleriPL/search', 'AdminGaleriPLController@search')->name('adminGaleriPL.search');


/*
Di bawah Ini Routes Buat Admin About!
*/

Route::get('/adminAbout', 'AdminAboutController@index')->name('adminAbout');

Route::get('/adminAbout/create', 'AdminAboutController@create')->name('adminAbout.create');

Route::post('/adminAbout', 'AdminAboutController@store')->name('adminAbout.store');

Route::post('/adminAbout/delete/{id}', 'AdminAboutController@destroy')->name('adminAbout.destroy');

Route::get('/adminAbout/edit/{id}', 'AdminAboutController@edit')->name('adminAbout.edit');

Route::post('/adminAbout/{id}', 'AdminAboutController@update')->name('adminAbout.update');

Route::get('/adminAbout/search', 'AdminAboutController@search')->name('adminAbout.search');

/*
Di bawah Ini Routes Buat Admin FAQ!
*/

Route::get('/adminFAQ', 'AdminFAQController@index')->name('adminFAQ');

Route::get('/adminFAQ/create', 'AdminFAQController@create')->name('adminFAQ.create');

Route::post('/adminFAQ', 'AdminFAQController@store')->name('adminFAQ.store');

Route::post('/adminFAQ/delete/{id}', 'AdminFAQController@destroy')->name('adminFAQ.destroy');

Route::get('/adminFAQ/edit/{id}', 'AdminFAQController@edit')->name('adminFAQ.edit');

Route::post('/adminFAQ/{id}', 'AdminFAQController@update')->name('adminFAQ.update');

Route::get('/adminFAQ/search', 'AdminFAQController@search')->name('adminFAQ.search');

/*
Di bawah Ini Routes Buat Pesan Kritik/Saran!
*/
Route::get('/adminPesan', 'AdminPesanController@index')->name('adminPesan');

Route::post('/adminPesan', 'PesanController@store')->name('adminPesan.store');

Route::post('/adminPesan/delete/{id}', 'AdminPesanController@destroy')->name('adminPesan.destroy');

/*
Di bawah Ini Routes Buat Admin Promo!
*/
Route::get('/adminPromo', 'AdminPromoController@index')->name('adminPromo');

Route::get('/adminPromo/create', 'AdminPromoController@create')->name('adminPromo.create');

Route::post('/adminPromo', 'AdminPromoController@store')->name('adminPromo.store');

Route::post('/adminPromo/delete/{id}', 'AdminPromoController@destroy')->name('adminPromo.destroy');

Route::get('/adminPromo/edit/{id}', 'AdminPromoController@edit')->name('adminPromo.edit');

Route::post('/adminPromo/{id}', 'AdminPromoController@update')->name('adminPromo.update');

/*
Di bawah Ini Routes Buat Admin Testimonial!
*/
Route::get('/adminTestimoni', 'AdminTestimoniController@index')->name('adminTestimoni');

Route::get('/adminTestimoni/create', 'AdminTestimoniController@create')->name('adminTestimoni.create');

Route::post('/adminTestimoni', 'AdminTestimoniController@store')->name('adminTestimoni.store');

Route::post('/adminTestimoni/delete/{id}', 'AdminTestimoniController@destroy')->name('adminTestimoni.destroy');

Route::get('/adminTestimoni/edit/{id}', 'AdminTestimoniController@edit')->name('adminTestimoni.edit');

Route::post('/adminTestimoni/{id}', 'AdminTestimoniController@update')->name('adminTestimoni.update');

/*
Di bawah Ini Routes Buat Admin Footer!
*/
Route::get('/adminFooter', 'AdminFooterController@index')->name('adminFooter');


    //Admin Footer Untuk Lokasi dan Map!

Route::get('/adminLokasi/create', 'AdminFooterController@createLokasi')->name('adminLokasi.create');

Route::post('/adminLokasi', 'AdminFooterController@storeLokasi')->name('adminLokasi.store');

Route::post('/adminLokasi/delete/{id}', 'AdminFooterController@destroyLokasi')->name('adminLokasi.destroy');

Route::get('/adminLokasi/edit/{id}', 'AdminFooterController@editLokasi')->name('adminLokasi.edit');

Route::post('/adminLokasi/{id}', 'AdminFooterController@updateLokasi')->name('adminLokasi.update');

    //Admin Footer Untuk Kontak dan Email!

Route::get('/adminKontak/create', 'AdminFooterController@createKontak')->name('adminKontak.create');

Route::post('/adminKontak', 'AdminFooterController@storeKontak')->name('adminKontak.store');

Route::post('/adminKontak/delete/{id}', 'AdminFooterController@destroyKontak')->name('adminKontak.destroy');

Route::get('/adminKontak/edit/{id}', 'AdminFooterController@editKontak')->name('adminKontak.edit');

Route::post('/adminKontak/{id}', 'AdminFooterController@updateKontak')->name('adminKontak.update');

    //Admin Footer Untuk Sosial Media!

Route::get('/adminSosial/create', 'AdminFooterController@createSosial')->name('adminSosial.create');

Route::post('/adminSosial', 'AdminFooterController@storeSosial')->name('adminSosial.store');

Route::post('/adminSosial/delete/{id}', 'AdminFooterController@destroySosial')->name('adminSosial.destroy');

Route::get('/adminSosial/edit/{id}', 'AdminFooterController@editSosial')->name('adminSosial.edit');

Route::post('/adminSosial/{id}', 'AdminFooterController@updateSosial')->name('adminSosial.update');

    //Admin Footer Untuk Instansi Partner!

Route::get('/adminPartner/create', 'AdminFooterController@createPartner')->name('adminPartner.create');

Route::post('/adminPartner', 'AdminFooterController@storePartner')->name('adminPartner.store');

Route::post('/adminPartner/delete/{id}', 'AdminFooterController@destroyPartner')->name('adminPartner.destroy');

Route::get('/adminPartner/edit/{id}', 'AdminFooterController@editPartner')->name('adminPartner.edit');

Route::post('/adminPartner/{id}', 'AdminFooterController@updatePartner')->name('adminPartner.update');