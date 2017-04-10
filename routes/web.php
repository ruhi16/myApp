<?php
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
        echo "Name: ".$u->name."<br>";
        echo "Email: ".$u->email."<br>";
        echo "Password: ".$u->password."<br><br>";
    }
    echo "Change effected, from school, now Home... updated :)";
    //return "Date Saved Successfully for ayantika";
    //return view('welcome');
});
