<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
  public function index()
  {
      \Debugbar::disable();
      return 'Hello World';
  }
}
