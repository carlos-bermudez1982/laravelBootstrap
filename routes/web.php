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

Route::get('/', 'PagesController@inicio')->name('index');

Route::get('/courses', 'PagesController@cursos')->name('courses');

Route::get('/teachers', 'PagesController@profesores')->name('teachers');

Route::get('/events', 'PagesController@eventos')->name('events');

Route::get('/about', 'PagesController@acerca')->name('about');

Route::get('/courses-single', 'PagesController@coursesSingle')->name('courses-single');

Route::get('/gallery', 'PagesController@gallery')->name('gallery');

Route::get('/news', 'PagesController@noticias')->name('news');

Route::resource('/contact', 'MessagesController');
