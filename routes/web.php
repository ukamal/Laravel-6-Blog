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

//Route::get('/', function () {
//    return view('pages.index');
//});

Route::get('/','HelloController@index');


Route::get(md5('/about'),'HelloController@about')->name('about');

Route::get('/contactus','HelloController@contact')->name('contact');
Route::get('/blog','HelloController@blog');


//Category
Route::get('/all-category','CategoryController@allCategory')->name('all-category');
Route::get('/add-category','CategoryController@addCategory')->name('add-category');
Route::post('/store-category','CategoryController@storeCategory')->name('store.category');
Route::get('/view/category/{id}','CategoryController@viewCategory');
Route::get('delete/category/{id}','CategoryController@deleteCategory');
Route::get('edit/category/{id}','CategoryController@editCategory');
Route::post('update/category/{id}','CategoryController@updateCategory');

//post
Route::get('/sample-page','PostController@samplePage')->name('sample.page');
Route::post('store/post','PostController@storePost')->name('store.post');
Route::get('all/post','PostController@allPost')->name('all.post');
Route::get('view/post/{id}','PostController@viewPost');
Route::get('edit/post/{id}','PostController@editPost');
Route::get('delete/post/{id}','PostController@deletePost');
Route::post('update/post/{id}','PostController@updatePost');

//Student
//Route::get('student','StudentController@student')->name('student');
//Route::post('store','StudentController@store')->name('store.student');
//Route::get('all-student','StudentController@index')->name('all.student');
//Route::get('edit/student/{id}','StudentController@editStudent');
//Route::post('update/student/{id}','StudentController@updateStudent');
//Route::get('view/student/{id}','StudentController@show');
//Route::get('delete/student/{id}','StudentController@destroy');

Route::resource('student','StudentController');



Auth::routes();
//Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
