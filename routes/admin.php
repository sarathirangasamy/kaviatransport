<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::resource('/master/customer', 'AdminController\CustomerController');

Route::resource('/master/broker', 'AdminController\BrokerController');

Route::resource('/master/details', 'AdminController\DetailsController');


Route::get('/getCustomerDetails', 'AdminController\DetailsController@getCustomerDetails');



