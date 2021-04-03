<?php

use Illuminate\Support\Facades\Route;

Route::get('/readme', function (){
   return view('docs.v1.readme');
})->name('doc.readme');
