<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredefinedKitsController extends Controller
{
    public function index()
    {
        return view ('predefinedkits.index');
    }
}
