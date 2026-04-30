@extends('layouts.app')

@section('title', '| Register')

@section('content')

<div class="page-label">Form</div>

<div class="card-seodash" style="max-width:560px;">
    <h4 style="font-size:1.2rem; font-weight:700; color:#1a1a2e; margin-bottom:22px;">
        Register
    </h4>

    @if(session('success'))
        <div class="alert alert-success alert-seodash mb-4">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-seodash mb-4">
            <i class="bi bi-exclamation-circle me-2"></i>
            <ul class="mb-0 ps-3">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/welcome">
        @csrf

        <div class="mb-3">
            <label class="form-label">First name:</label>
            <input
                type="text"
                name="first_name"
                class="form-control"
                value="{{ old('first_name') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Last name:</label>
            <input
                type="text"
                name="last_name"
                class="form-control"
                value="{{ old('last_name') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Gender:</label>
            <div class="mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male"
                        id="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                    <label class="form-check-label" for="male" style="font-size:0.875rem;">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female"
                        id="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="female" style="font-size:0.875rem;">Female</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="other"
                        id="other" {{ old('gender') == 'other' ? 'checked' : '' }}>
                    <label class="form-check-label" for="other" style="font-size:0.875rem;">Other</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Nationality:</label>
            <select name="nationality" class="form-select">
                <option value="indonesia" {{ old('nationality') == 'indonesia' ? 'selected' : '' }}>Indonesian</option>
                <option value="english" {{ old('nationality') == 'english' ? 'selected' : '' }}>English</option>
                <option value="malaysia" {{ old('nationality') == 'malaysia' ? 'selected' : '' }}>Malaysian</option>
                <option value="other" {{ old('nationality') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Language Spoken:</label>
            <div class="mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="language[]"
                        value="indonesia" id="lang_id"
                        {{ is_array(old('language')) && in_array('indonesia', old('language')) ? 'checked' : '' }}>
                    <label class="form-check-label" for="lang_id" style="font-size:0.875rem;">Bahasa Indonesia</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="language[]"
                        value="english" id="lang_en"
                        {{ is_array(old('language')) && in_array('english', old('language')) ? 'checked' : '' }}>
                    <label class="form-check-label" for="lang_en" style="font-size:0.875rem;">English</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="language[]"
                        value="other" id="lang_other"
                        {{ is_array(old('language')) && in_array('other', old('language')) ? 'checked' : '' }}>
                    <label class="form-check-label" for="lang_other" style="font-size:0.875rem;">Other</label>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label">Bio:</label>
            <textarea name="bio" class="form-control" rows="4"
                placeholder="Ceritakan sedikit tentang dirimu...">{{ old('bio') }}</textarea>
        </div>

        <button type="submit" class="btn-primary-seodash">
            <i class="bi bi-person-plus me-2"></i>Sign Up
        </button>
    </form>
</div>

@endsection
