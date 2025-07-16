<?php

use Illuminate\Support\Facades\Route;

// 首頁
Route::get('/', function () {
    return view('home');
})->name('home');

// 關於岱恩
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// 服務項目
Route::get('/services', function () {
    return view('services');
})->name('services');

// 空間環境
Route::get('/space', function () {
    return view('space');
})->name('space');

// 常見問題
Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');


// 聯絡我們(立即預約諮詢)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

