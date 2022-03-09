<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Hotel Hebat</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/login-register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/login-register/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/login-register/images/signin-image.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert" style="color: red;">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your Name" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Your Password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="{{ __('Login') }}"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/login-register/vendor/jquery/jquery.min.js"></script>
    <script src="assets/login-register/js/main.js"></script>
</body>
</html>