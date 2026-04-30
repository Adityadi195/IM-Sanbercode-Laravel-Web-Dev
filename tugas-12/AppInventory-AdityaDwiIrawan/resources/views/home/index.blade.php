@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')

<div class="page-label">Home</div>

<div class="card-seodash">
    <h1 style="font-size:1.8rem; font-weight:700; color:#1a1a2e; margin-bottom:6px;">
        Social Media Developer Santai Berkulitas
    </h1>
    <p style="color:#6c757d; font-size:0.9rem; margin-bottom:28px;">
        Belajar dan Berbagi agar hidup ini semakin santai berkualitas
    </p>

    <hr style="border-color:#e9ecef; margin-bottom:24px;">

    <h4 style="font-size:1.1rem; font-weight:700; color:#1a1a2e; margin-bottom:12px;">
        Benefit Join di SanberBook
    </h4>
    <ul style="color:#555; font-size:0.9rem; line-height:1.9; padding-left:20px; margin-bottom:24px;">
        <li>Mendapat motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h4 style="font-size:1.1rem; font-weight:700; color:#1a1a2e; margin-bottom:12px;">
        Cara Bergabung ke SanberBook
    </h4>
    <ol style="color:#555; font-size:0.9rem; line-height:1.9; padding-left:20px;">
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="/register" style="color:#4361ee; font-weight:600; text-decoration:none;">Form Sign Up</a></li>
        <li>Selesai</li>
    </ol>
</div>

@endsection
