<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PINKIES STORE</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Source Sans Pro', sans-serif;
            background: linear-gradient(135deg, #FFB6C1 0%, #FFC0CB 100%);
        }

        .login-container {
            display: flex;
            width: 900px;
            height: 500px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-image {
            flex: 1;
            background: linear-gradient(rgba(255, 182, 193, 0.9), rgba(255, 192, 203, 0.9)),
                        url('/api/placeholder/400/320');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
            color: white;
        }

        .store-info {
            margin-top: 20px;
        }

        .store-info h3 {
            color: white;
            margin-bottom: 10px;
        }

        .store-info p {
            margin: 5px 0;
            font-size: 14px;
        }

        .login-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form h1 {
            color: #FF69B4;
            margin-bottom: 10px;
            font-size: 24px;
            text-align: center;
        }

        .login-form h2 {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 14px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: #FF69B4;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: #666;
            font-size: 14px;
        }

        .remember-me input {
            margin-right: 8px;
        }

        .login-button {
            background: #FF69B4;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-button:hover {
            background: #FF1493;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

        .register-link a {
            color: #FF69B4;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .social-link {
            color: white;
            background: #FF69B4;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .social-link:hover {
            background: #FF1493;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <h2>PINKIES STORE</h2>
            <p>Fashion terbaik untuk gaya hidup modern Anda</p>
            
            <div class="store-info">
                <h3>Informasi Toko</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Fashion Street No. 123, Jakarta Selatan</p>
                <p><i class="fas fa-envelope"></i> info@pinkiesstore.com</p>
                <p><i class="fas fa-phone"></i> +62 821-xxxx-xxxx</p>
                <div class="social-icons">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        
        <div class="login-form">
            <h1>Selamat Datang Di PINKIES STORE</h1>
            <h2>SILAHKAN LOGIN</h2>
            
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ingat Saya</label>
                </div>
                
                <button type="submit" class="login-button">Masuk</button>
            </form>
            
            <div class="register-link">
                Belum Punya akun? <a href="{{ url('register') }}">Daftar disini</a>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>