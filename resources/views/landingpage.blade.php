<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIT - Himpunan Mahasiswa Informatika</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            line-height: 1.7;
            color: #1f2937;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav {
            background: rgba(255, 255, 255, 0.95);
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(234, 88, 12, 0.15);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 45px;
        }

        .logo span {
            font-size: 22px;
            font-weight: 700;
            color: #ea580c;
        }

        .nav-links a {
            margin: 0 15px;
            text-decoration: none;
            color: #374151;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #ea580c;
        }

        .btn {
            padding: 10px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary {
            background: #ea580c;
            color: white;
        }

        .btn-primary:hover {
            background: #c2410c;
        }

        .btn-light {
             background: white;
             color: #ea580c;
        }

        .btn-light:hover {
             background: #f3f4f6;
             color: #c2410c;
             transform: translateY(-2px);
        }

        .hero {
            background: linear-gradient(rgba(234, 88, 12, 0.75), rgba(251, 146, 60, 0.5)),
                        url("{{ asset('foto.jpeg') }}") center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 3.2rem;
        }

        h2 {
            font-size: 2.4rem;
            text-align: center;
            color: #ea580c;
        }

        .section {
            padding: 90px 0;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .clickable-card {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .clickable-card .card {
            cursor: pointer;
        }

        .clickable-card .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(234, 88, 12, 0.18);
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #ea580c, #fb923c);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .cta {
            background: linear-gradient(to right, #ea580c, #fb923c);
            color: white;
            text-align: center;
            padding: 80px 0;
            
        }

        .footer {
            background: #1f2937;
            color: #9ca3af;
            text-align: center;
            padding: 40px 0;
        }
    </style>
</head>

<body>

<nav>
    <div class="container nav-content">
        <div class="logo">
            <img src="{{ asset('hmit.jpeg') }}" alt="Logo HMIT" style="height:45px;">
            <span>HMIT</span>
        </div>

        <div class="nav-links">
            <a href="#tentang">Tentang</a>
            <a href="#program">Program</a>
            <a href="#kontak">Kontak</a>
            <a href="/aspirasi">Aspirasi</a>
            <a href="/pendaftaran">Pendaftaran</a>
            <a href="{{ route('login') }}">Login</a>
        </div>

        <a href="#kontak" class="btn btn-primary">Hubungi</a>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1>Himpunan Mahasiswa Informatika</h1>
        <p style="margin:20px 0; font-size:1.2rem;">
            Wadah pengembangan potensi, inovasi, dan kolaborasi mahasiswa IT
        </p>
        <a href="#program" class="btn btn-primary">Lihat Program</a>
    </div>
</section>

<section id="tentang" class="section" style="background:#f8fafc;">
    <div class="container">
        <h2>Tentang HMIT</h2>
        <p style="text-align:center; margin-top:20px;">
            HMIT adalah organisasi mahasiswa yang menjadi wadah pengembangan akademik dan non-akademik di bidang teknologi informasi.
        </p>
    </div>
</section>

<section id="program" class="section">
    <div class="container">
        <h2>Program Kerja</h2>

        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; margin-top:40px;">

            <div class="card">
                <div class="icon-circle"><i class="fas fa-code"></i></div>
                <h3>Workshop</h3>
                <p>Pelatihan coding dan teknologi terbaru.</p>
            </div>

            <div class="card">
                <div class="icon-circle"><i class="fas fa-users"></i></div>
                <h3>Seminar</h3>
                <p>Diskusi bersama praktisi IT.</p>
            </div>

            <div class="card">
                <div class="icon-circle"><i class="fas fa-trophy"></i></div>
                <h3>Kompetisi</h3>
                <p>Lomba dan hackathon mahasiswa.</p>
            </div>

            <a href="/aspirasi" class="clickable-card">
                <div class="card">
                    <div class="icon-circle"><i class="fas fa-comments"></i></div>
                    <h3>Aspirasi Mahasiswa</h3>
                    <p>Sampaikan kritik dan saran untuk kemajuan HMIT.</p>
                </div>
            </a>

        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <h2 style="color:white;">Gabung Bersama Kami</h2>
        <p style="margin:20px 0;">Jadilah bagian dari HMIT dan kembangkan potensimu</p>
        <a href="/pendaftaran" class="btn btn-light">Daftar</a>
    </div>
</section>

<footer id="kontak" class="footer">
    <div class="container">
        <h3 style="color:white;">HMIT</h3>
        <p>Himpunan Mahasiswa Informatika</p>
        <p style="margin-top:20px;">© 2026</p>
    </div>
</footer>

</body>
</html>