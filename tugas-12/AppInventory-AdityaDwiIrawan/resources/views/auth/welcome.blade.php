@extends('layouts.app')

@section('title', '| Welcome')

@section('content')

<div class="page-label">Dashboard</div>

<div class="card-seodash">
    {{-- Welcome heading --}}
    <h1 style="font-size:1.9rem; font-weight:700; color:#1a1a2e; margin-bottom:8px;">
        Selamat Datang {{ $first }} {{ $last }}
    </h1>

    <p style="color:#555; font-size:0.95rem; line-height:1.6;">
        Terima kasih telah bergabung di Sanberbook.
        Social Media kita bersama!
    </p>

    <hr style="border-color:#e9ecef; margin: 20px 0;">

    {{-- Summary info from registration --}}
    <div style="display:flex; flex-wrap:wrap; gap:12px;">
        @if(!empty($gender))
        <div style="background:#f4f6f9; border-radius:8px; padding:8px 16px; font-size:0.82rem; color:#555;">
            <span style="font-weight:600; color:#4361ee;">Gender:</span> {{ ucfirst($gender) }}
        </div>
        @endif

        @if(!empty($nationality))
        <div style="background:#f4f6f9; border-radius:8px; padding:8px 16px; font-size:0.82rem; color:#555;">
            <span style="font-weight:600; color:#4361ee;">Nationality:</span> {{ ucfirst($nationality) }}
        </div>
        @endif

        @if(!empty($languages))
        <div style="background:#f4f6f9; border-radius:8px; padding:8px 16px; font-size:0.82rem; color:#555;">
            <span style="font-weight:600; color:#4361ee;">Language:</span>
            {{ implode(', ', array_map('ucfirst', $languages)) }}
        </div>
        @endif
    </div>

    @if(!empty($bio))
    <div style="margin-top:16px; padding:14px 16px; background:#f4f6f9; border-radius:10px; border-left:3px solid #4361ee;">
        <p style="margin:0; font-size:0.875rem; color:#555; font-style:italic;">"{{ $bio }}"</p>
    </div>
    @endif

    <div style="margin-top:24px;">
        <a href="/" class="btn-primary-seodash" style="text-decoration:none; display:inline-flex; align-items:center; gap:6px;">
            <i class="bi bi-house"></i> Kembali ke Beranda
        </a>
    </div>
</div>

@endsection
