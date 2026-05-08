<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pendaftaran HMIT</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    overflow:hidden;
}

/* WRAPPER */

.wrapper{
    min-height:100vh;
    display:flex;
    background:linear-gradient(
        135deg,
        #171c2a 0%,
        #7f3412 45%,
        #d65a16 100%
    );
    position:relative;
    overflow:hidden;
    padding:0 60px;
}

/* VIGNETTE */

.wrapper::before{
    content:'';
    position:absolute;
    inset:0;
    background:
        linear-gradient(
            to right,
            rgba(0,0,0,0.38) 0%,
            rgba(0,0,0,0.12) 18%,
            transparent 38%,
            transparent 62%,
            rgba(0,0,0,0.12) 82%,
            rgba(0,0,0,0.38) 100%
        );
    pointer-events:none;
}

/* LEFT */

.left{
    flex:1.2;
    display:flex;
    align-items:center;
    gap:70px;
    position:relative;
    z-index:2;
    overflow:hidden;
}

/* GROUND EFFECT */

.left::after{
    content:'';
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:140px;

    background:linear-gradient(
        to top,
        rgba(0,0,0,0.22),
        transparent
    );
}

/* IMAGE */

.left img{
    width:400px;
    max-width:none;
    height:auto;
    object-fit:contain;
    transform:
    translatex(40px)
    translateY(40px);

    filter:
    brightness(1.01)
    contrast(1.02)
    saturate(1.01)
    drop-shadow(0 18px 28px rgba(0,0,0,0.16));
    
    opacity:0.99;
}

/* TEXT */

.left-content{
    max-width:360px;
    color:white;
    position:relative;
    z-index:2;
    margin-bottom:0;
}

.left-content h1{
    font-size:3.3rem;
    font-weight:900;
    line-height:1.05;
    letter-spacing:-1px;
    margin-bottom:24px;

    text-shadow:
    0 5px 20px rgba(0,0,0,0.18);
}

.left-content p{
    font-size:1.05rem;
    line-height:1.9;
    opacity:0.95;
}

/* RIGHT */

.right{
    flex:0.9;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
    z-index:2;
    transform:translateY(-45px)
}

/* FORM BOX */

.box{
    width:100%;
    max-width:460px;

    background:rgba(255,255,255,0.97);

    padding:34px;

    border-radius:24px;

    box-shadow:
    0 20px 50px rgba(0,0,0,0.18);
}

/* TITLE */

.box h2{
    color:#ea580c;
    font-size:2rem;
    margin-bottom:10px;
    font-weight:800;
}

.box p{
    color:#6b7280;
    margin-bottom:24px;
    line-height:1.8;
}

/* SUCCESS */

.success{
    background:#ecfdf5;
    color:#15803d;
    border:1px solid #86efac;
    padding:14px;
    border-radius:12px;
    margin-bottom:18px;
    font-weight:600;
}

/* INPUT */

input,
textarea{
    width:100%;
    padding:14px;
    margin-bottom:14px;

    border:1px solid #d1d5db;
    border-radius:14px;

    outline:none;
    transition:.3s;

    font-size:14px;
    background:#fff;
}

input:focus,
textarea:focus{
    border-color:#ea580c;

    box-shadow:
    0 0 0 4px rgba(234,88,12,.12);
}

textarea{
    resize:none;
    height:120px;
}

/* BUTTON */

button{
    width:100%;
    padding:14px;

    border:none;
    border-radius:14px;

    background:#ea580c;
    color:white;

    font-size:15px;
    font-weight:700;

    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#c2410c;
    transform:translateY(-2px);
}

/* BACK */

.back{
    display:block;
    text-align:center;
    margin-top:18px;

    text-decoration:none;
    color:#ea580c;

    font-weight:600;
}

.back:hover{
    color:#c2410c;
}

/* RESPONSIVE */

@media(max-width:1100px){

    body{
        overflow:auto;
    }

    .wrapper{
        flex-direction:column;
        padding:40px 20px;
    }

    .left{
        flex-direction:column;
        align-items:center;
        text-align:center;
    }

    .left img{
        width:320px;
        transform:none;
    }

    .left-content{
        margin-bottom:40px;
    }

    .left-content h1{
        font-size:2.5rem;
    }

    .right{
        width:100%;
        padding-bottom:40px;
    }

    .box{
        max-width:100%;
    }
}

</style>
</head>

<body>

<div class="wrapper">

    <!-- LEFT -->

    <div class="left">

        <img src="{{ asset('kepengurusan3.png') }}" alt="Pengurus HMIT">

        <div class="left-content">

            <h1>
                Ayo! Daftar<br>
                dan Jadi Bagian<br>
                dari HMIT
            </h1>

            <p>
                Bergabunglah bersama keluarga besar HMIT,
                kembangkan potensi, relasi, dan pengalaman
                di dunia teknologi dan organisasi.
            </p>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="right">

        <div class="box">

            <h2>Form Pendaftaran</h2>

            <p>
                Isi data diri untuk bergabung bersama
                Himpunan Mahasiswa Informatika.
            </p>

            @if(session('success'))
                <div class="success">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <form action="/pendaftaran" method="POST">

                @csrf

                <input
                    type="text"
                    name="nama"
                    placeholder="Nama Lengkap"
                    required
                >

                <input
                    type="text"
                    name="nim"
                    placeholder="NIM"
                    required
                >

                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required
                >

                <textarea
                    name="alasan"
                    placeholder="Alasan bergabung"
                    required
                ></textarea>

                <button type="submit">
                    Daftar Sekarang
                </button>

            </form>

            <a href="/" class="back">
                ← Kembali ke Beranda
            </a>

        </div>

    </div>

</div>

</body>
</html>