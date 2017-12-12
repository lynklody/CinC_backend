<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth;

class StatusController extends Controller
{
    public function checkStatus(){
    $status = \Auth::check();
    if(null != $status) {
        $isLoggedIn = '1';
    } ELSE {
        $isLoggedIn = '0';
    };
    return $isLoggedIn;
    }
}