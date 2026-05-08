<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register HMIT</title>

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
            padding:20px;
        }

        .register-card{
            width:100%;
            max-width:380px;
            background:white;
            padding:22px;
            border-radius:20px;
            box-shadow:0 8px 25px rgba(0,0,0,0.12);
            margin:auto 0;
        }

        .register-header{
            display:flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            margin-bottom:10px;
        }

        .register-header img{
            width:42px;
            height:42px;
            object-fit:cover;
        }

        .register-header h2{
            color:#ea580c;
            font-size:22px;
            font-weight:700;
        }

        .subtitle{
            text-align:center;
            color:#6b7280;
            margin-bottom:18px;
            font-size:13px;
        }

        .form-group{
            margin-bottom:12px;
        }

        label{
            display:block;
            margin-bottom:5px;
            font-weight:600;
            color:#374151;
            font-size:14px;
        }

        input{
            width:100%;
            padding:10px 12px;
            border:1px solid #d1d5db;
            border-radius:10px;
            font-size:14px;
            transition:0.3s;
        }

        input:focus{
            outline:none;
            border-color:#ea580c;
            box-shadow:0 0 0 3px rgba(234,88,12,0.12);
        }

        .password-box{
            position:relative;
        }

        .password-box input{
            padding-right:45px;
        }

        .toggle-password{
            position:absolute;
            right:15px;
            top:50%;
            transform:translateY(-50%);
            cursor:pointer;
            font-size:16px;
            user-select:none;
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
            margin-top:5px;
        }

        button:hover{
            background:#c2410c;
        }

        .login-link{
            text-align:center;
            margin-top:14px;
            font-size:13px;
        }

        .login-link a{
            color:#ea580c;
            text-decoration:none;
            font-weight:600;
        }

        .login-link a:hover{
            text-decoration:underline;
        }

        .error{
            color:red;
            font-size:12px;
            margin-top:4px;
        }

    </style>
</head>

<body>

<div class="register-card">

    <div class="register-header">
        <img src="{{ asset('hmit.jpeg') }}" alt="Logo HMIT">
        <h2>Register</h2>
    </div>

    <p class="subtitle">
        Buat akun baru HMIT
    </p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label>Nama</label>

            <input 
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>NIM</label>

            <input 
                type="text"
                name="nim"
                value="{{ old('nim') }}"
                required
            >

            @error('nim')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

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

        <div class="form-group">
            <label>Password</label>

            <div class="password-box">

                <input 
                    type="password"
                    name="password"
                    id="password"
                    required
                >

                <span class="toggle-password" onclick="togglePassword('password', this)">
                    👁
                </span>

            </div>

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Konfirmasi Password</label>

            <div class="password-box">

                <input 
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    required
                >

                <span class="toggle-password" onclick="togglePassword('password_confirmation', this)">
                    👁
                </span>

            </div>
        </div>

        <button type="submit">
            Register
        </button>

        <div class="login-link">
            Sudah punya akun?
            <a href="{{ route('login') }}">
                Login
            </a>
        </div>

    </form>

</div>

<script>

function togglePassword(id, element){

    const input = document.getElementById(id);

    if(input.type === 'password'){
        input.type = 'text';
        element.innerHTML = '🙈';
    }else{
        input.type = 'password';
        element.innerHTML = '👁';
    }

}

</script>

</body>
</html>