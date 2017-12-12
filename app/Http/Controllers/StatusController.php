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
    } else {
        $isLoggedIn = '0';
    };
    return $isLoggedIn;
    }

    public function userInfo() {
        if (checkStates != '0') {
            $email = \Auth::user() -> email;
            //$id = \Auth::user()->decode(id_token); 
        } else {
            echo("user undefined");
        }
    }
}