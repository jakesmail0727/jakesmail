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
Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
 ]);
 Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
 ]);
 Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
 ]);
 Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
 ]);
 Route::resource('my','MyController');
 Route::get('/register',function() {
    return view('register');
 });
 Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
 Route::get('/test', ['as'=>'testing',function() {
    return view('test');
 }]);
 
 Route::get('redirect',function() {
    return redirect()->route('testing');
 });
 Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
