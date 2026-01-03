<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntreEmContatoController extends Controller
{
    public function index()
    {
        return view('contato.index');
    }
}
