<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPemantauanController extends Controller
{
    public function index()
    {
        return view('riwayat_pemantauan');
    }
}
