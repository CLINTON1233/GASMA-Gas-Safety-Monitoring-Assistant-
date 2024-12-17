<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiInsidenController extends Controller
{
    public function index()
    {
        return view('notifikasi_insiden');
    }
}
