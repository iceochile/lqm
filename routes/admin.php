<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\homecontroller;

Route::get('', [homecontroller::class,'index']);