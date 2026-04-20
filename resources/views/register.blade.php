@extends('layouts.app')

@section('content')
<div class="container page-wrap py-5">
    <div class="row justify-content-center w-100">
        <div class="col-lg-7">
            <div class="form-card">
                <div class="text-center mb-4">
                    <div class="brand-logo mx-auto">P</div>
                    <h2 class="fw-bold mt-3">Form Pendaftaran</h2>
                    <p class="text-muted">Daftar sebagai pelanggan PrintKu</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Layanan Favorit</label>
                        <select name="layanan_favorit" class="form-select">
                            <option value="">-- Pilih layanan --</option>
                            <option value="Print Dokumen">Print Dokumen</option>
                            <option value="Fotocopy">Fotocopy</option>
                            <option value="Scan Dokumen">Scan Dokumen</option>
                            <option value="Jilid">Jilid</option>
                            <option value="Laminating">Laminating</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                    </div>

                    <button type="submit" class="btn btn-main w-100">Daftar Sekarang</button>
                </form>

                <p class="text-center mt-4 mb-0">
                    Sudah punya akun? <a href="/login">Login</a>
                </p>

                <div class="text-center mt-3">
                    <a href="/" class="text-decoration-none">← Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection