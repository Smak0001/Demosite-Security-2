<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TooManyController extends Controller
{
    public function index()
    {
        return view('toomany');
    }
}
