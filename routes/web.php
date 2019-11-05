<?php
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

// Route::get('/', function () {
//     return view('client.index');
// });

Route::get('/admina', function () {
    return view('admin.index');
});
    
Route::group(['prefix'=>'quantri'],function(){
    Route::group(['prefix'=>'cate'],function(){
        Route::get('list','CatesController@getList'); 
        Route::get('add','CatesController@getAdd');
        Route::post('add','CatesController@postAdd');

        Route::get('edit/{id}','CatesController@getEdit');
        Route::post('edit/{id}','CatesController@postEdit');

        Route::get('delete/{id}','CatesController@getDelete');
    });
   

    Route::group(['prefix'=>'products'],function(){
        Route::get('list','ProductsController@getList');

        Route::get('add','ProductsController@getAdd');
        Route::post('add','ProductsController@postAdd');

        Route::get('edit/{id}','ProductsController@getEdit');
        Route::post('edit/{id}','ProductsController@postEdit');

        Route::get('delete/{id}','ProductsController@getDelete');
    });

    Route::get('/', function () {
        return view('admin.home.index');
    });
    Route::get('/news', function () {
        return view('admin.news.index');
    });
    Route::get('/add', function () {
        return view('admin.news.add');
    });
});
Route::get('/news/{id}', function () {
    return view('client.detailnews');
});

Route::get('/listnews', function () {
    return view('client.listnews');
});

Route::get('/lienhe', function () {
    return view('client.lienhe');
});
Route::get('/admina/news', function () {
    return view('admin.news.index');
});
Route::get('/admina/add', function () {
    return view('admin.news.add');
});

Route::get('language/{lang}', ['as' => 'language', 'uses' => 'LanguageController@change']);
Route::get('js/lang.ok', ['as' => 'assets.lang', 'uses' => 'LanguageController@getJson']);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
