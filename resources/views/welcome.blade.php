<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YorickMusic Hello</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 96px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                color: #649ded;
                margin-bottom: 30px;
            }

            .home-image {
                right: 10px;
                position: absolute;
                padding: 0 95px;
            }

            .logo-image {
                border: 3px solid black;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .login-image {
                right: 180px;
                position: absolute;
                padding: 0 95px;
            }

            .reg-image {
                right: 55px;
                position: absolute;
                padding: 0 95px;
            }
            @font-face {
                font-family: Grand; 
                src: url(fonts/Grand.ttf);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                
                    @auth
                    <img src="img/home24px.png" class="home-image">
                    <a href="{{ url('/home') }}">
                    Home</a>
                    @else
                    
                        <a href="{{ route('login') }}">
                        <img src="img/log-in.png" class="login-image">Login</a>

                        @if (Route::has('register'))
                        
                            <a href="{{ route('register') }}">
                            <img src ="img/registration.png" class="reg-image">Register</a>
                        @endif
                    @endauth
                    
                </div>
            @endif
            
            <div class="content">
                <div class="title m-b-md">
                <img src="img/MainPageLogo.jpg" class="logo-image">
                    YorickMusic
                </div>

                <div class="links">
                    <a href="https://github.com/katharosMelancholin">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
