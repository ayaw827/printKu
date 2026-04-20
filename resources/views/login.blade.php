@extends('layouts.app')

@section('content')
<div class="container page-wrap">
    <div class="row justify-content-center w-100">
        <div class="col-lg-5">
            <div class="form-card">
                <div class="text-center mb-4">
                    <div class="brand-logo mx-auto">P</div>
                    <h2 class="fw-bold mt-3">Login PrintKu</h2>
                    <p class="text-muted">Masuk untuk melanjutkan order print kamu</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Masukkan email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                    </div>

                    <button type="submit" class="btn btn-main w-100">Login</button>
                </form>

                <p class="text-center mt-4 mb-0">
                    Belum punya akun? <a href="/register">Daftar</a>
                </p>

                <div class="text-center mt-3">
                    <a href="/" class="text-decoration-none">← Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection