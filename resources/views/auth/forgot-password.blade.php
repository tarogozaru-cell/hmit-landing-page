<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password HMIT</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ea580c, #fb923c);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .forgot-card{
            width:100%;
            max-width:380px;
            background:white;
            padding:25px;
            border-radius:20px;
            box-shadow:0 8px 25px rgba(0,0,0,0.12);
        }

        .forgot-header{
            display:flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            margin-bottom:10px;
        }

        .forgot-header img{
            width:42px;
            height:42px;
            object-fit:cover;
        }

        .forgot-header h2{
            color:#ea580c;
            font-size:22px;
            font-weight:700;
        }

        .subtitle{
            text-align:center;
            color:#6b7280;
            margin-bottom:20px;
            font-size:13px;
            line-height:1.6;
        }

        .form-group{
            margin-bottom:15px;
        }

        label{
            display:block;
            margin-bottom:5px;
            font-size:14px;
            font-weight:600;
            color:#374151;
        }

        input{
            width:100%;
            padding:10px 12px;
            border:1px solid #d1d5db;
            border-radius:10px;
            font-size:14px;
        }

        input:focus{
            outline:none;
            border-color:#ea580c;
            box-shadow:0 0 0 3px rgba(234,88,12,0.12);
        }

        button{
            width:100%;
            padding:11px;
            border:none;
            border-radius:10px;
            background:#ea580c;
            color:white;
            font-size:14px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#c2410c;
        }

        .back-login{
            text-align:center;
            margin-top:15px;
            font-size:13px;
        }

        .back-login a{
            color:#ea580c;
            text-decoration:none;
            font-weight:600;
        }

        .back-login a:hover{
            text-decoration:underline;
        }

        .success{
            background:#dcfce7;
            color:#166534;
            padding:10px;
            border-radius:10px;
            font-size:13px;
            margin-bottom:15px;
            text-align:center;
        }

        .error{
            color:red;
            font-size:12px;
            margin-top:4px;
        }

    </style>
</head>

<body>

<div class="forgot-card">

    <div class="forgot-header">
        <img src="{{ asset('hmit.jpeg') }}" alt="Logo HMIT">
        <h2>Forgot Password</h2>
    </div>

    <p class="subtitle">
        Masukkan email akun kamu dan kami akan mengirim link reset password.
    </p>

    @if (session('status'))
        <div class="success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">
            Kirim Link Reset Password
        </button>

        <div class="back-login">
            <a href="{{ route('login') }}">
                Kembali ke Login
            </a>
        </div>

    </form>

</div>

</body>
</html>