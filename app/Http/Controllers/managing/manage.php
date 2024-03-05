<?php

namespace App\Http\Controllers\managing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class manage extends Controller
{
  public function roles()
  {
    return view('content.manage.roles');
  }

  public function permission()
  {
    return view('content.manage.permission');
  }
}
