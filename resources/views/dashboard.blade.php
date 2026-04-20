@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
            <span class="brand-logo">P</span> PrintKu
        </a>

        <div class="d-flex gap-2">
            <a href="/" class="btn btn-outline-custom">Home</a>
            <a href="/logout" class="btn btn-main">Logout</a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-8">
            <div class="form-card text-center">
                <div class="brand-logo mx-auto">P</div>
                <h1 class="fw-bold mt-4">Selamat Datang di Dashboard</h1>
                <p class="mt-3">Halo, <strong>{{ session('user_nama') }}</strong></p>
                <p>Email: {{ session('user_email') }}</p>

                <div class="mt-4">
                    <p>Anda berhasil login ke website jasa print & fotocopy PrintKu.</p>
                    <p>Halaman ini bisa kamu tunjukkan saat presentasi sebagai halaman setelah login.</p>
                </div>

                <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
                    <a href="/" class="btn btn-outline-custom">Kembali ke Landing Page</a>
                    <a href="/logout" class="btn btn-main">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection