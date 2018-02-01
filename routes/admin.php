<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::resource('outbox', 'OutboxController');
Route::resource('inbox', 'InboxController');
Route::resource('sent', 'SentItemController');


