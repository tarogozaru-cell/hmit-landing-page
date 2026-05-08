<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Aspirasi HMIT</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    body{
        margin:0;
        font-family:'Segoe UI',sans-serif;
        background:#f8fafc;
    }

    .wrapper{
        height:100vh;
        display:flex;
    }

    .left{
        flex:1.2;
        background:linear-gradient(135deg,#111827,#ea580c);
        display:flex;
        align-items:center;
        justify-content:center;
        gap:40px;
        padding:40px 50px;
        color:white;
        position:relative;
        overflow:hidden;
    }

    .left::before{
        content:'';
        position:absolute;
        inset:0;
        background:
            radial-gradient(circle at 20% 30%, rgba(255,255,255,0.08), transparent 35%),
            radial-gradient(circle at 80% 70%, rgba(255,255,255,0.05), transparent 25%);
    }

    .left::after{
        content:'';
        position:absolute;
        bottom:0;
        left:0;
        width:100%;
        height:120px;
        background:linear-gradient(to top, rgba(0,0,0,0.25), transparent);
    }

    .left-image{
        flex:1.3;
        display:flex;
        justify-content:center;
        align-items:flex-end;
        position:relative;
        z-index:2;
    }

    .left-image img{
        width:150%;
        max-width:none;
        height:auto;
        object-fit:contain;
        transform:translateY(60px);

        filter:
        brightness(1.01)
        contrast(1.01)
        saturate(1.01)
        drop-shadow(0 14px 22px rgba(0,0,0,0.14));
        opacity:0.985;
        mix-blend-mode:normal;
        
    }

    .left-content{
        flex:0.8;
        position:relative;
        z-index:2;
        transform:translateX(20px);
    }

    .left-content h1{
        font-size:3.5rem;
        line-height:1.1;
        margin-bottom:20px;
        font-weight:800;
    }

    .left-content p{
        font-size:1.1rem;
        line-height:1.8;
        opacity:0.95;
    }

    .right{
        flex:1;
        display:flex;
        justify-content:center;
        align-items:center;
        padding:40px;
        background:white;
    }

    .form-box{
        width:100%;
        max-width:500px;
    }

    .form-box h2{
        color:#ea580c;
        margin-bottom:10px;
        font-size:2rem;
    }

    .form-box p{
        color:#6b7280;
        margin-bottom:30px;
    }

    .input-group{
        margin-bottom:18px;
    }

    input, select, textarea{
        width:100%;
        padding:15px;
        border:1px solid #d1d5db;
        border-radius:12px;
        font-size:15px;
        outline:none;
        transition:.3s;
    }

    input:focus,
    select:focus,
    textarea:focus{
        border-color:#ea580c;
        box-shadow:0 0 0 3px rgba(234,88,12,.15);
    }

    textarea{
        resize:none;
        height:140px;
    }

    button{
        width:100%;
        padding:15px;
        border:none;
        background:#ea580c;
        color:white;
        border-radius:14px;
        font-size:15px;
        cursor:pointer;
        font-weight:700;
        transition:.3s;
    }

    button:hover{
        background:#c2410c;
        transform:translatey(-2px);
    }

    .back{
        display:block;
        text-align:center;
        margin-top:18px;
        text-decoration:none;
        color:#ea580c;
        font-weight:600;
        transition:.3s;
    }

    .back:hover{
        color:#c2410c;
    }

    .form-box .success{
        background:#ecfdf5;
        color:#15803d;
        border:1px solid #86efac;
        padding:12px;
        border-radius:10px;
        margin-bottom:18px;
        font-weight:600;
}

    @media(max-width:900px){
        .wrapper{
            flex-direction:column;
            height:auto;
        }

        .left{
            flex-direction:column;
            text-align:center;
            padding:40px 20px;
        }

        .left-image img{
            width:100%;
            transform:none;
        }

        .left-content h1{
            font-size:2.5rem;
        }
    }
</style>

</head>

<body>

<div class="wrapper">

<div class="left">
    <div class="left-image">
        <img src="{{ asset('kepengurusan.png') }}" alt="Kepengurusan HMIT">
    </div>

    <div class="left-content">
        <h1>Suarakan<br>Aspirasimu</h1>
        <p>
            Ide besar dimulai dari suara mahasiswa.
            Sampaikan masukanmu untuk membangun HMIT yang lebih progresif.
        </p>
    </div>
</div>

<div class="right">
    <div class="form-box">
        <h2>Form Aspirasi</h2>
        <p>Sampaikan pendapatmu untuk kemajuan organisasi.</p>

        @if(session('success'))
            <p class="success">✅{{ session('success') }}</p>
        @endif

        <form action="/aspirasi" method="POST">
            @csrf

            <div class="input-group">
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>

            <div class="input-group">
                <input type="text" name="nim" placeholder="NIM" required>
            </div>

            <div class="input-group">
                <select name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option>Program Kerja</option>
                    <option>Fasilitas</option>
                    <option>Kegiatan</option>
                    <option>Lainnya</option>
                </select>
            </div>

            <div class="input-group">
                <textarea name="aspirasi" placeholder="Tulis aspirasi kamu di sini..." required></textarea>
            </div>

            <button type="submit">Kirim Aspirasi</button>
        </form>

        <a href="/" class="back">← Kembali ke Beranda</a>
    </div>
</div>
```

</div>

</body>
</html>
