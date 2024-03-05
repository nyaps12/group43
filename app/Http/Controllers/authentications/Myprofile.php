<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Myprofile extends Controller
{
  public function profile()
  {
    return view('content.authentications.auth-my-profile');
  }

  public function security()
  {
    return view('content.authentications.auth-my-security');
  }

  public function notification()
  {
    return view('content.authentications.auth-my-notification');
  }
}
