<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GasolinesController extends Controller
{
    public function index()
    {
        return view('gasoline.index');
    }

    public function gasoline()
    {
        return view('gasoline.gasoline');
    }

}
