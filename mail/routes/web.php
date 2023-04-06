<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/email', function () {

    Mail::to('shithelahammed@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

