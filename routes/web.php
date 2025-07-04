<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;




Route::get('/',[formcontroller::class,'index'])->name('show');

Route::get('/add',function(){
    return view('add');
});

Route::post('/create',[formcontroller::class,'store'])->name('create');

Route::get('/edit/{id}',[formcontroller::class,'show'])->name('edit');

Route::put('/update/{id}', [formcontroller::class,'update'])->name('update');
Route::get('/delete/{id}',[formcontroller::class, 'destroy'])->name('delete');
