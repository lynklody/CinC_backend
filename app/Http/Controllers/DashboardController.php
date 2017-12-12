<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

  public function __construct()
  {

  }

  public function index()
  {
    $isLoggedIn = \Auth::check();
    return view('index')
      ->with('isLoggedIn', $isLoggedIn);
  }

  public function dump()
  {
    $isLoggedIn = \Auth::check();
    //$userEmail = \User::getUserInfo()find::($email);
    return view('dump')
      ->with('isLoggedIn', $isLoggedIn)
      ->with('user',\Auth::user()->getUserInfo())
      ->with('accessToken',\Auth::user()->getAuthPassword());
  }
}