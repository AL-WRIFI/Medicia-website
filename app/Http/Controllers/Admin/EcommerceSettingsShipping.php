<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcommerceSettingsShipping extends Controller
{
  public function index()
  {
    return view('content.apps.app-ecommerce-settings-shipping');
  }
}
