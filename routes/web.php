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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route:: get('/home', function () {
  $MusicData = DB::select('select * from music where isFavorite = 1');
  return view('home', ['MusicData' => $MusicData]);
});

Route::get('/playlists', 'PlaylistsController@index')->name('playlists');
Route::get('/playlists/create', 'PlaylistsController@create')->name('pcreate');
Route::post('/playlistscreate', 'PlaylistsController@store');


Route::post('submit','MusicDataController@store');

Route::get('/upload', function() {
  return view ('upl');
})->name('uploadmusic');

Route::get('/home/upload', function() {
  return view ('upl');
});

Route::get('/playlists/{id}', 'PlaylistsController@current');

Route::get('/albums', 'AlbumsController@index')->name('albums');
Route::get('/upload', 'MusicDataController@create')->name('acreate');
Route::post('/uploadalbums', 'AlbumsController@storeAlbums');

Route::get('/upload', 'MusicDataController@index')->name('upload');
Route::get('/upload/create', 'MusicDataController@create')->name('ucreate');
Route::post('/uploadmusic', 'MusicDataController@storeMusic');
