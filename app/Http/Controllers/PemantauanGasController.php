<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemantauanGasController extends Controller
{
    public function index()
    {
        return view('pemantauan_gas');
    }
}
