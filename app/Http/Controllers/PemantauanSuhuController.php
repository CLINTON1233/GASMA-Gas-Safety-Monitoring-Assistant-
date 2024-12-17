<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemantauanSuhuController extends Controller
{
    public function index()
    {
        return view('pemantauan_suhu');
    }
}
