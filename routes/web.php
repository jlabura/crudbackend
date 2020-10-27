<?php

use App\Book;

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

//dodano Jakisa, prikazivanje na pocetnoj stranici
Route::get('/', function (App\Book $book) {

    $books = Book::all();
    return view('welcome', compact('books'));
});

/*Route::get('/contact', function () {

    return view('contact');
});*/


//Route::resource('books', 'BooksController')->middleware('auth');
Route::resource('books', 'BooksController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
