<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        "series" => config("comics")
    ];
    return view('home', $data);
})-> name("homepage");

Route::get("/comic/{id}", function($id) {
    $comics = config('comics');
    //utilizzo la funzione php array_key_exists per verificare se la key (id) esiste nell'array
    if(array_key_exists($id, $comics))  {
        $item = $comics[$id];
        $data = [
           'comic' => $item
       ];
       return view('details', $data);
    }
       abort("404");
})->name("page-details");

Route::get('contact-us', function () {
    return view("contact");
})-> name("page-contact");
