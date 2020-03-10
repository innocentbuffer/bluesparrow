<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/frontend.min.css">
</head>
<body>
    <header class="page-header">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand text-white position-relative" href="{{ url('/') }}">
                    <img src="images/logo/bslogo.png" alt="bluesparrow logo"><span class="logoname">{{ config('app.name', 'BlueSparrow') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link menutitle text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="">
                                <a href="" class="btn bg-white menutitle1">Business</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="home-banner">
            <div class="bannermoon">
                <img src="images/items/bannermoon.png" class="moon-img" alt="">
            </div>
            <!--
            <div  class="moonshadow d-none d-md-block">
                <img src="images/items/moonshadow.png" alt="">
            </div>
            -->
            <div class="banner-text">
                <div class="banner-text-child">
                    <h1>Welcome to BlueSparrow</h1>
                    <p>Upload and manage all your content libraries and more</p>
                </div>
                
            </div>
            <div class="wave1">
                <img src="images/items/wave1.png" alt="">
            </div>
            <div class="wave2">
                <img src="images/items/wave2.png" alt="">
            </div>
            <div class="form-home">
                <form action="">
                    <div class="row mx-0">
                        <div class="col-md-6 0ffset-md-6 ">
                            <div class="row mx-0">
                                <div class="col-8">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Sign up here</label>
                                            <input type="email" name="" id="" class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-4 pl-0">
                                    <div class="form-group">
                                        <button type="submit" class=" home-form-btn">Send</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
    </footer>

</body>
</html>