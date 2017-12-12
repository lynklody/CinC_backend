<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth;

class StatusController extends Controller
{
    public function checkStatus(){
    $Status = \Auth::check();
    if(null != $status) {
        $isLoggedIn = true;
    } ELSE {
        $isLoggedIn = false;
    };
    return $isLoggedIn;
}
}