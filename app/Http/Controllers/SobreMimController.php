<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreMimController extends Controller
{
   public function index()
   {
    return view('sobre.index');
   }
}
