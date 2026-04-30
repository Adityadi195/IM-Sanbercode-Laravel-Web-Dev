<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Menampilkan form register (Route GET: '/register')
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Memproses form register dan menampilkan welcome page
     * (Route POST: '/welcome')
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'gender'     => 'nullable|in:male,female,other',
            'nationality'=> 'nullable|string',
            'language'   => 'nullable|array',
            'bio'        => 'nullable|string|max:500',
        ]);

        // Kirim data ke view welcome
        return view('auth.welcome', [
            'first'     => $request->first_name,
            'last'      => $request->last_name,
            'gender'    => $request->gender,
            'nationality' => $request->nationality,
            'languages' => $request->language ?? [],
            'bio'       => $request->bio,
        ]);
    }
}
