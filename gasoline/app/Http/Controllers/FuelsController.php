<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuelsController extends Controller
{
    public function index()
    {
        return view('fuels.index');
    }
}
