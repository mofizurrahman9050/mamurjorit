<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/self', function(){
    return view('self');
});

Route::get('/form', function(){
    return view('form');
});

Route::get('/userlist',function(){
    return view('userlist');
});

Route::get('/category/{name?}',function($name){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('/student/{id}',function($id){
    return $id;
});

Route::get('/product/{price}',function($price){
    return $price;
})->where('price','[0-9]+');