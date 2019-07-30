<?php
use App\Http\Controllers\ContentController;

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

Route::resource('travelling', 'DivisionController');

Route::get('/mainpage', 'ContentController@showmain');

Route::get('/about', 'ContentController@showabout');

// Route::get('/action', 'ContentController@showaction');

Route::get('/visit', 'ContentController@showvisits');

Route::get('/mainpage', 'ContentController@randommainpage');


 Route::get('/morecontent', 'ContentController@showmorecontent');


Route::get('/frontend/visit/{id}','ContentController@showvisit');

// Route::get('/frontend/visit/{id}','ContentController@showmorevisit');

Route::get('/frontend/twocontent/{id}', 'ContentController@showtwocontent');

// Route::get('/loginuser', 'AdminController@showloginuser');

Route::get('/morecontent', 'ContentController@index');

Route::get('/index', 'ContentController@showdisplaytable');

Route::get('/add', 'ContentController@showadd');

Route::get('/frontend/action/{id}', 'ContentController@showaction');

// Route::get('/edit', 'ContentController@showedit');

// Route::resource('/displaytable', 'AdminController');

//Route::resource('/backend/displaytable/{id}', 'AdminController@destroy');

// Route::get('/displaytable.destroy', 'AdminController@destroy');

Route::get('/loginuser', 'ContentController@showloginuser' );

// Route::get('/displaytable/{$id}', 'AdminController@delete');






Auth::routes();

Route::get('/home', 'AdminController@index');
Route::get('/backend/index', 'AdminController@index')->name('backend');

Route::resource('/backend', 'AdminController');
