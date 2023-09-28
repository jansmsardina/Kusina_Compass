<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/KusinaCompass.css') }}">
    <title> Kusina Compass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<header> @yield('header')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: rgba(63, 160, 198, 0.163)">
            <a href="{{ route('Home') }}">
            <img class="img-fluid" src="{{ asset('/Images/Logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="background-color: rgba(63, 160, 198, 0.004)">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('Home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('Stores') }}">Stores</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('About') }}">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('ContactUs') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard') }}">Store Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('register') }}">Signup</a>
                    </li>
                    
                        </ul>
            </div>
        </div>
    </nav>
</header>
</head>

</html>


