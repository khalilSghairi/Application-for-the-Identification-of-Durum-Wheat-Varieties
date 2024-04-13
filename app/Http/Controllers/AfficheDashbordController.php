<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfficheDashbordController extends Controller
{
    public function null() {
        return view('null');
      }

      public function index() {
        return view('home');
      }

}
