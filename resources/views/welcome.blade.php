<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PrintKu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #071a2d, #0b2d3a, #123b47);
    color: white;
    font-family: 'Segoe UI', sans-serif;
}

.navbar-custom {
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

.navbar-brand {
    font-size: 28px;
    font-weight: 700;
    color: white !important;
}

.nav-link {
    color: rgba(255,255,255,0.85) !important;
    margin: 0 8px;
}

.nav-link:hover {
    color: #00e6a8 !important;
}

.btn-login {
    border: 1px solid #ffffff55;
    color: white;
    border-radius: 30px;
    padding: 8px 18px;
}

.btn-login:hover {
    background: white;
    color: #0b2d3a;
}

.btn-register {
    background: #00e6a8;
    color: #06242e;
    border-radius: 30px;
    padding: 8px 18px;
    font-weight: 600;
}

.btn-register:hover {
    background: #00c896;
    color: #06242e;
}

.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 40px;
}

.title {
    font-size: 58px;
    font-weight: 800;
    line-height: 1.1;
}

.highlight {
    color: #00e6a8;
}

.btn-custom {
    background: #00e6a8;
    border: none;
    padding: 12px 25px;
    border-radius: 30px;
    color: #06242e;
    font-weight: 600;
}

.btn-custom:hover {
    background: #00c896;
    color: #06242e;
}

.card-box {
    background: rgba(255,255,255,0.06);
    border-radius: 20px;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.08);
}

.hero-image {
    max-width: 100%;
    filter: drop-shadow(0 20px 30px rgba(0,0,0,0.35));
}

@media (max-width: 768px) {
    .title {
        font-size: 42px;
    }
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/">PrintKu</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrintKu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarPrintKu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            </ul>

            <div class="d-flex gap-2">
                <a href="/login" class="btn btn-login">Login</a>
                <a href="/register" class="btn btn-register">Register</a>
            </div>
        </div>
    </div>
</nav>

<div class="container hero">
    <div class="row align-items-center w-100">

        <div class="col-md-6">
            <h1 class="title">
                Jasa <span class="highlight">Print</span><br>
                & Fotocopy
            </h1>
            <p class="mt-3 fs-5">Cepat, Murah, dan Berkualitas Tinggi untuk kebutuhan tugas, dokumen, dan usaha kamu.</p>

            <a href="/register" class="btn btn-custom mt-3">Pesan Sekarang</a>

            <div class="row mt-4">
                <div class="col-6">
                    <div class="card-box">
                        <h5>Print Warna</h5>
                        <p>Hasil tajam & jelas</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-box">
                        <h5>Fotocopy</h5>
                        <p>Cepat & hemat</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 text-center mt-5 mt-md-0">
            <img src="https://cdn-icons-png.flaticon.com/512/2920/2920277.png" width="400" class="hero-image" alt="Print Service">
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>