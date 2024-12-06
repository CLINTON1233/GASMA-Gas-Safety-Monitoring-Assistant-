<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard'); // Pastikan view 'dashboard.blade.php' ada di folder resources/views
    }
}
