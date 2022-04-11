<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// This controller exists only for the Main Site
class FuelsController extends Controller
{
    public function index()
    {
        return view('fuels.index');
    }
}
