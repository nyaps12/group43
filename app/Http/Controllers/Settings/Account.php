<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Account extends Controller
{
  public function account()
  {
    return view('content.settings.account-settings');
  }

  public function security()
  {
    return view('content.settings.account-security');
  }

  public function notification()
  {
    return view('content.settings.account-notification');
  }
}
