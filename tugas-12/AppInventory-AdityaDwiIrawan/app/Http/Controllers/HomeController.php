<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama (Route: '/')
     */
    public function index()
    {
        return view('home.index');
    }
}
