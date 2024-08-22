<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // post::create([
       
    //     "title"=>"js",
    //     "description"=>"JavaScript"

    // ]);
    return view('welcome');
});
