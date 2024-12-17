<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemantauanCahayaController extends Controller
{
    public function index()
    {
        return view('pemantauan_cahaya');
    }
}
