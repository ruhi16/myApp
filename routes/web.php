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
    $user = User::all();
//     $user->name 	= 'Ayantika Das';
//     $user->email 	= 'ayantika2011@gmail.com';
//     $user->password	= 'test';
//     $user->save();
    foreach($user as $u){
        echo $u->name;
        echo $u->email;
        echo $u->password;
    }
    //return "Date Saved Successfully for ayantika";
    //return view('welcome');
});
