<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrintKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #032238;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-custom {
            background: transparent;
            padding-top: 20px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #12e0aa;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #032238;
            font-weight: 800;
            margin-right: 10px;
        }

        .brand-text {
            font-size: 28px;
            font-weight: 800;
            color: white;
        }

        .btn-main {
            background: #12e0aa;
            color: #032238;
            border: none;
            border-radius: 999px;
            padding: 12px 24px;
            font-weight: 700;
        }

        .btn-main:hover {
            background: #0cc594;
            color: #032238;
        }

        .btn-outline-custom {
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            border-radius: 999px;
            padding: 12px 24px;
        }

        .btn-outline-custom:hover {
            background: white;
            color: #032238;
        }

        .form-card {
            background: white;
            color: #1f2937;
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 16px 35px rgba(0,0,0,0.2);
        }

        .form-control, .form-select, textarea {
            border-radius: 14px;
            padding: 12px;
        }

        .page-wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .nav-pill {
            background: white;
            border-radius: 999px;
            padding: 8px 18px;
        }

        .nav-pill .nav-link {
            color: #0b2a3f !important;
            font-weight: 600;
            margin: 0 8px;
        }

        .top-icon-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: none;
            background: #12e0aa;
            color: #032238;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>