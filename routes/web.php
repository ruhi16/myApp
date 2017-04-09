<?php
use DB;
use App\User;
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
    $user = new User;
    $user->name 	= 'Hari Narayan Das';
	$user->email 	= 'hndas2016@gmail.com';
    $user->save();
    return "Date Saved Successfully";
    //return view('welcome');
});
