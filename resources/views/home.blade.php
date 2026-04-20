@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        padding-top: 30px;
        padding-bottom: 40px;
    }

    .hero-kicker {
        font-size: 13px;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #d9f7ee;
    }

    .hero-title {
        font-size: 60px;
        line-height: 1;
        font-weight: 900;
    }

    .hero-title .accent {
        color: #12e0aa;
    }

    .hero-desc {
        color: #c6dde2;
        max-width: 460px;
    }

    .price-box {
        margin-top: 24px;
        color: #d9f7ee;
        font-size: 14px;
    }

    .price-number {
        font-size: 34px;
        font-weight: 800;
        color: #12e0aa;
    }

    .preview-box {
        margin-top: 24px;
        background: #11a86c;
        border-radius: 20px;
        padding: 18px;
        display: flex;
        gap: 18px;
        align-items: center;
        width: fit-content;
    }

    .preview-main,
    .preview-small {
        background: white;
        color: #032238;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        font-weight: 800;
    }

    .preview-main {
        width: 90px;
        height: 90px;
    }

    .preview-small {
        width: 58px;
        height: 58px;
        font-size: 18px;
    }

    .hero-card {
        background: linear-gradient(135deg, #0aa865, #11d59f);
        border-radius: 28px;
        min-height: 480px;
        position: relative;
        overflow: hidden;
        padding: 34px;
    }

    .hero-card-label {
        position: absolute;
        right: -34px;
        top: 110px;
        transform: rotate(90deg);
        font-size: 58px;
        font-weight: 900;
        color: rgba(255,255,255,0.92);
        letter-spacing: 2px;
    }

    .hero-card-sub {
        position: absolute;
        right: -95px;
        top: 170px;
        transform: rotate(90deg);
        font-size: 32px;
        font-weight: 700;
        color: rgba(255,255,255,0.25);
        letter-spacing: 2px;
    }

    .machine-box {
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255,255,255,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 60px auto 0;
        font-size: 120px;
        box-shadow: 0 25px 40px rgba(0,0,0,0.2);
    }

    .floating-dot {
        position: absolute;
        width: 16px;
        height: 16px;
        background: rgba(255,255,255,0.45);
        border-radius: 50%;
    }

    .dot-1 { top: 35px; right: 70px; }
    .dot-2 { bottom: 70px; left: 40px; }
    .dot-3 { bottom: 110px; right: 90px; }

    .category-bar {
        margin-top: 30px;
        background: #0b9b65;
        border-radius: 999px;
        padding: 8px;
    }

    .category-item {
        background: white;
        color: #032238;
        border-radius: 999px;
        padding: 12px 22px;
        font-weight: 700;
        display: inline-block;
        margin: 4px;
    }

    .category-item.dark {
        background: transparent;
        color: white;
    }

    .service-card {
        background: white;
        color: #1f2937;
        border-radius: 26px;
        padding: 22px 18px;
        text-align: center;
        min-height: 290px;
        box-shadow: 0 16px 35px rgba(0,0,0,0.18);
    }

    .service-icon-big {
        width: 95px;
        height: 95px;
        margin: 0 auto 16px;
        background: linear-gradient(135deg, #12e0aa, #0b9b65);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
    }

    .service-title {
        font-size: 18px;
        font-weight: 800;
        min-height: 44px;
    }

    .service-price {
        color: #0aa865;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .mini-btn {
        border: none;
        background: #12e0aa;
        color: #032238;
        border-radius: 999px;
        padding: 8px 16px;
        font-size: 13px;
        font-weight: 700;
    }

    .promo-section {
        padding: 90px 0 30px;
        position: relative;
    }

    .promo-title {
        font-size: 72px;
        line-height: 0.95;
        font-weight: 900;
        text-transform: uppercase;
    }

    .promo-machine {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: linear-gradient(135deg, #12e0aa, #0b9b65);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 90px;
        margin: -10px auto 0;
        box-shadow: 0 25px 45px rgba(0,0,0,0.25);
    }

    .green-strip {
        margin: 35px 0 45px;
        background: #11bf84;
        color: white;
        padding: 12px 0;
        font-weight: 800;
        transform: rotate(-3deg);
        text-align: center;
        letter-spacing: 1px;
    }

    .section-chip {
        width: fit-content;
        margin: 0 auto 30px;
        background: white;
        color: #0b9b65;
        padding: 10px 24px;
        border-radius: 999px;
        font-weight: 800;
    }

    .popular-card {
        text-align: center;
    }

    .branches-wrap {
        margin-top: 70px;
    }

    .branch-label-box {
        background: white;
        color: #0b9b65;
        border-radius: 20px;
        min-height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        font-size: 32px;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
    }

    .branch-card {
        background: white;
        border-radius: 18px;
        padding: 16px;
        color: #1f2937;
        min-height: 105px;
    }

    .branch-map {
        width: 58px;
        height: 58px;
        border-radius: 14px;
        background: #eef2f7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .contact-box, .thankyou-box {
        border-radius: 24px;
        padding: 26px;
        min-height: 230px;
    }

    .contact-box {
        background: white;
        color: #1f2937;
    }

    .thankyou-box {
        background: linear-gradient(135deg, #0aa865, #12e0aa);
        color: white;
    }

    .contact-box input,
    .contact-box textarea {
        border: 1px solid #d7dce2;
        border-radius: 12px;
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 12px;
    }

    .footer-box {
        margin-top: 24px;
        background: linear-gradient(135deg, #0aa865, #0a7f5b);
        padding: 34px 0 70px;
        position: relative;
        overflow: hidden;
    }

    .footer-big {
        position: absolute;
        left: 0;
        right: 0;
        bottom: -10px;
        text-align: center;
        font-size: 110px;
        font-weight: 900;
        color: rgba(255,255,255,0.07);
        letter-spacing: 4px;
    }

    @media (max-width: 991px) {
        .hero-title { font-size: 44px; }
        .promo-title { font-size: 48px; }
        .hero-card-label, .hero-card-sub { display: none; }
        .machine-box { width: 220px; height: 220px; font-size: 96px; }
        .footer-box {
    margin-top: 24px;
    background: linear-gradient(135deg, #0aa865, #0a7f5b);
    padding: 60px 0 90px;
    position: relative;
    overflow: hidden;
}

.footer-box .container {
    position: relative;
    z-index: 2;
}

.footer-big {
    position: absolute;
    left: 0;
    right: 0;
    bottom: -10px;
    text-align: center;
    font-size: 110px;
    font-weight: 900;
    color: rgba(255,255,255,0.07);
    letter-spacing: 4px;
}

@media (max-width: 991px) {
    .footer-box {
        text-align: center;
    }

    .footer-box .d-flex.mt-3 {
        justify-content: center;
    }
}
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
            <span class="brand-logo">P</span>
            <span class="brand-text">PrintKu</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrintKu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarPrintKu">
            <ul class="navbar-nav mx-auto nav-pill">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#layanan">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#popular">Popular</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Contact</a></li>
            </ul>

            <div class="d-flex gap-2 mt-3 mt-lg-0 align-items-center">
                @if(session()->has('user_id'))
                    <span class="text-white fw-bold">Halo, {{ session('user_nama') }}</span>
                    <a href="/logout" class="top-icon-btn d-flex align-items-center justify-content-center">↗</a>
                @else
                    <a href="/login" class="btn btn-outline-custom rounded-circle d-flex align-items-center justify-content-center" style="width:42px;height:42px;padding:0;">👤</a>
                    <a href="/register" class="top-icon-btn d-flex align-items-center justify-content-center">↗</a>
                @endif
            </div>
        </div>
    </div>
</nav>

@if(session('success'))
<div class="container mt-3">
    <div class="alert alert-success">{{ session('success') }}</div>
</div>
@endif

<section class="hero-section container">
    <div class="row align-items-center gy-5">
        <div class="col-lg-6">
            <div class="hero-kicker">Where every print tells a story.</div>
            <h1 class="hero-title mt-3">WHAT'S <span class="accent">YOURS?</span></h1>

            <div class="mt-4">
                <div class="fw-bold text-uppercase">Printku Copy Center Delight</div>
                <p class="hero-desc mt-2">
                    Menyediakan jasa print dokumen, fotocopy, scan, jilid, dan laminating
                    dengan desain modern, proses cepat, dan hasil terbaik untuk tugas,
                    proposal, skripsi, dan dokumen bisnis.
                </p>
            </div>

            <div class="price-box">
                Best Rating
                <div class="price-number">4.9</div>
            </div>

            @if(session()->has('user_id'))
                <a href="#kontak" class="btn btn-main mt-2">ADD TO CART</a>
            @else
                <a href="/login" class="btn btn-main mt-2">ADD TO CART</a>
            @endif

            <div class="preview-box">
                <div class="preview-main">🖨️</div>
                <div class="preview-small">📄</div>
                <div class="preview-small">📚</div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="hero-card">
                <div class="floating-dot dot-1"></div>
                <div class="floating-dot dot-2"></div>
                <div class="floating-dot dot-3"></div>

                <div class="machine-box">🖨️</div>
                <div class="hero-card-label">PRINTING</div>
                <div class="hero-card-sub">COPY CENTER</div>
            </div>
        </div>
    </div>

    <div class="category-bar text-center">
        <span class="category-item">PRINT</span>
        <span class="category-item dark">FOTOCOPY</span>
        <span class="category-item dark">AT HOME</span>
        <span class="category-item dark">LAMINATING</span>
    </div>
</section>

<section class="container py-5" id="layanan">
    <div class="row g-4 justify-content-center">
        @foreach($services as $service)
        <div class="col-6 col-lg-3">
            <div class="service-card">
                <div class="service-icon-big">🖨️</div>
                <div class="service-title">{{ $service['title'] }}</div>
                <div class="service-price">{{ $service['price'] }}</div>
                <p style="font-size:13px;">{{ $service['desc'] }}</p>

                @if(session()->has('user_id'))
                    <a href="#kontak" class="mini-btn text-decoration-none">ADD TO CART</a>
                @else
                    <a href="/login" class="mini-btn text-decoration-none">ADD TO CART</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="promo-section container text-center">
    <div class="promo-title">UNMATCHED<br>QUALITY</div>
    <div class="promo-machine">📄</div>
    <p class="text-light mt-4 col-lg-6 mx-auto">
        Solusi cetak modern untuk mahasiswa, siswa, kantor, dan UMKM.
        Hasil rapi, cepat, dan cocok untuk berbagai kebutuhan dokumen.
    </p>
</section>

<div class="green-strip">
    PRINTKU &nbsp; PRINTKU &nbsp; PRINTKU &nbsp; PRINTKU &nbsp; PRINTKU &nbsp; PRINTKU
</div>

<section class="container py-4" id="popular">
    <div class="section-chip">POPULAR</div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="service-card popular-card">
                <div class="service-icon-big">📄</div>
                <div class="service-title">PRINT DOKUMEN</div>
                @if(session()->has('user_id'))
                    <a href="#kontak" class="mini-btn text-decoration-none mt-2">ADD TO CART</a>
                @else
                    <a href="/login" class="mini-btn text-decoration-none mt-2">ADD TO CART</a>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card popular-card">
                <div class="service-icon-big">🖨️</div>
                <div class="service-title">PRINT WARNA</div>
                @if(session()->has('user_id'))
                    <a href="#kontak" class="mini-btn text-decoration-none mt-2">ADD TO CART</a>
                @else
                    <a href="/login" class="mini-btn text-decoration-none mt-2">ADD TO CART</a>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card popular-card">
                <div class="service-icon-big">📚</div>
                <div class="service-title">JILID LAPORAN</div>
                @if(session()->has('user_id'))
                    <a href="#kontak" class="mini-btn text-decoration-none mt-2">ADD TO CART</a>
                @else
                    <a href="/login" class="mini-btn text-decoration-none mt-2">ADD TO CART</a>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="container py-5" id="kontak">
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="contact-box">
                <h4 class="fw-bold mb-4">CONTACT</h4>
                <input type="text" placeholder="Nama">
                <input type="email" placeholder="Email">
                <textarea rows="3" placeholder="Pesan"></textarea>
                <button class="mini-btn">SUBMIT</button>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="thankyou-box d-flex flex-column justify-content-center">
                <h3 class="fw-bold">THANK YOU!</h3>
                <p class="mt-2 mb-0">
                    Terima kasih telah mengunjungi website kami.
                    Siap bantu kebutuhan print, fotocopy, jilid, scan, dan laminating dengan cepat.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="footer-box mt-4">
    <div class="container">
        <div class="row gy-4 align-items-center">
            
            <div class="col-lg-4">
                <div class="d-flex align-items-center fw-bold fs-4">
                    <span class="brand-logo">P</span> PrintKu
                </div>
                <p class="mt-3 text-light mb-4">
                    Solusi jasa print dan fotocopy modern untuk tugas, kantor, dan usaha.
                </p>

                <div class="text-light">
                    <p class="mb-2">
                        <strong>Instagram:</strong>
                        <a href="https://instagram.com/_pondologygolodnop" target="_blank" class="text-white text-decoration-none">
                            @_pondologygolodnop
                        </a>
                    </p>
                    <p class="mb-2">
                        <strong>WhatsApp:</strong>
                        <a href="https://wa.me/6282189698953" target="_blank" class="text-white text-decoration-none">
                            082189698953
                        </a>
                    </p>
                    <p class="mb-0">
                        <strong>Email:</strong> 02tinuyy@gmail.com
                    </p>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="machine-box mx-auto" style="width:140px;height:140px;font-size:60px;">🖨️</div>
            </div>

            <div class="col-lg-4">
                <h5 class="fw-bold">SUBSCRIBE</h5>
                <div class="d-flex mt-3">
                    <input type="text" class="form-control" placeholder="Enter your email">
                    <button class="btn btn-dark ms-2">→</button>
                </div>
                <p class="mt-3 text-light">
                    Join our latest update for new print service and offers.
                </p>
            </div>

        </div>
    </div>

    <div class="footer-big">CONTACT</div>
</section>
@endsection