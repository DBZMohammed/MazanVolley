<?php

use App\Mail\ContactMail;
use Illuminate\Http\Request;

Route::prefix('backoffice')->middleware('auth', 'checkAdmin')->namespace('Admin')->group(function () {

    // Route::get('posts/create', 'PostController@create')->name('posts.create');
    // Route::post('posts/store', 'PostController@store')->name('posts.store');
    // Route::get('posts', 'PostController@index')->name('posts.index');
    // Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    // Route::put('posts/{id}/update', 'PostController@update')->name('posts.update');
    // Route::get('posts/{id}', 'PostController@destroy')->name('posts.destroy');

    Route::get('/uploadsA', 'PostController@uploadsA')->name('uploadsA');
    Route::get('/licences', 'PostController@licences')->name('licences');

    Route::resource('posts', 'PostController');
    Route::resource('pages', 'PageController');
});

Route::resource('comments', 'CommentController');

// à propos non utilisé .
Route::get('/', function () {
    // echo('A propos');
    return view('a-propos');
})->name('accueil');

// page d'accueil

Route::get('/home', 'HomeController@index')->name('home');

//page de l'article selectionné

Route::get('article/{id}', 'PostController@article')->name('article');

//page articles par categories
Route::get('category/{title}', 'PostController@category')->name('category');

// page des articles
Route::get('articles', 'PostController@articles')->name('articles');

//fonction de recherche
Route::post('/search', 'PostController@search')->name('search');


//page des photos et vidéos
Route::get('uploads', 'PostController@uploads')->name('uploads');


//page du formulaire de contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {

    // Mail::send(new ContactMail($request));
    $request->session()->flash('status', 'Votre mail a bien été envoyé !');
    return redirect('/');
});



Auth::routes();
