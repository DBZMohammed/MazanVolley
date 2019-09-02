<?php


Route::prefix('backoffice')->middleware('auth','checkAdmin')->namespace('Admin')->group(function(){

    // Route::get('posts/create', 'PostController@create')->name('posts.create');
    // Route::post('posts/store', 'PostController@store')->name('posts.store');
    // Route::get('posts', 'PostController@index')->name('posts.index');
    // Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    // Route::put('posts/{id}/update', 'PostController@update')->name('posts.update');
    // Route::get('posts/{id}', 'PostController@destroy')->name('posts.destroy');


    Route::resource('posts', 'PostController');
    Route::resource('pages', 'PageController');
    Route::resource('infos', 'PageController');


});

Route::resource('comments', 'CommentController');

Route::get('/', function (){
    // echo('A propos');
    return view('a-propos');
});

Route::get('article/{id}', 'PostController@article')->name('article');

Route::get('articles', 'PostController@articles')->name('articles');

Route::get('infos', 'PostController@articles')->name('infos');
    // ->middleware('checkAdmin')



Route::get('category/{title}', 'PostController@category')->name('category');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
