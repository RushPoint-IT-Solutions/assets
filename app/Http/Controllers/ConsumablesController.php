<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsumablesController extends Controller
{
    public function index ()
    {
        return view ('consumables.index');
    }
}
