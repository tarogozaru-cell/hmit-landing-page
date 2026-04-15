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

        /* NAVBAR */
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
        }

        .btn-primary {
            background: #ea580c;
            color: white;
        }

        .btn-primary:hover {
            background: #c2410c;
        }

        /* HERO */
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

        /* CARD */
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

        /* CTA */
        .cta {
            background: linear-gradient(to right, #ea580c, #fb923c);
            color: white;
            text-align: center;
            padding: 80px 0;
        }

        /* FOOTER */
        .footer {
            background: #1f2937;
            color: #9ca3af;
            text-align: center;
            padding: 40px 0;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="container nav-content">
        <div class="logo">
            <img src="{{ asset('hmit.jpeg') }}" alt="Logo HMIT" style="heigth:45px;">
            <span>HMIT</span>
        </div>

        <div class="nav-links">
            <a href="#tentang">Tentang</a>
            <a href="#program">Program</a>
            <a href="#kontak">Kontak</a>
        </div>

        <a href="#kontak" class="btn btn-primary">Hubungi</a>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Himpunan Mahasiswa Informatika</h1>
        <p style="margin:20px 0; font-size:1.2rem;">
            Wadah pengembangan potensi, inovasi, dan kolaborasi mahasiswa IT
        </p>
        <a href="#program" class="btn btn-primary">Lihat Program</a>
    </div>
</section>

<!-- TENTANG -->
<section id="tentang" class="section" style="background:#f8fafc;">
    <div class="container">
        <h2>Tentang HMIT</h2>
        <p style="text-align:center; margin-top:20px;">
            HMIT adalah organisasi mahasiswa yang menjadi wadah pengembangan akademik dan non-akademik di bidang teknologi informasi.
        </p>
    </div>
</section>

<!-- PROGRAM -->
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

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <h2 style="color:white;">Gabung Bersama Kami</h2>
        <p style="margin:20px 0;">Jadilah bagian dari HMIT dan kembangkan potensimu</p>
        <a href="#" class="btn" style="background:white; color:#ea580c;">Daftar</a>
    </div>
</section>

<!-- FOOTER -->
<footer id="kontak" class="footer">
    <div class="container">
        <h3 style="color:white;">HMIT</h3>
        <p>Himpunan Mahasiswa Informatika</p>
        <p style="margin-top:20px;">© 2026</p>
    </div>
</footer>

</body>
</html>