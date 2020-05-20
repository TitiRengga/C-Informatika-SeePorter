<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>See Porter</title>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
  
        .team {
        min-height: 500px;
        padding: 60px 15px;
        float: left;
        height: 200%;
        width: 100%;
        }

        .team h1 {
        font-size: 36px;
        font-family: 'Montserrat';
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        padding-bottom: 60px;
        text-align: center;
        }

        .team .card {
            width: 50%;
            float: left;
            padding: 10px 15px;
            color: #c7c7c7;
        }

        .team .card .box {
            padding: 15px;
            background-color: #ffffff;
            border-radius: 5px;
            transition: margin 1s ease, box-shadow 1s ease;
            color: #3e3e3e;
            }


        .team .card .box img {
            width: 150px;
            display: block;
            margin: 10px auto;
            border-radius: 50%;
            color: #ffffff;
        }

        .team .card .box h4 {
            font-size: 20px;
            font-family: 'Montserrat';
            margin: 20px 0px 10px;
            color: #31a840;
            text-align: center;
            font-weight: 700;
        }

        .team .card .box h5 {
            font-size: 16px;
            font-family: 'Montserrat';
            font-weight: 600;
            color: #b9b9b9;
            margin: 0px 0px 15px;
            text-align: center;
        }

        .team .card .box p {
            color: #b9b9b9;
            font-size: 15px;
            font-family: 'Montserrat';
            font-weight: 400;
            line-height: 24px;
            text-align: center;
            padding: 0px 20px;
        }

        .about-section {
            width: 100%;
            height: 200%;
            background: #738299;
            padding: -100px -100px;
            font-family: 'Montserrat', sans-serif;
            background-size: 110%;
        }

        .about H2 {
            color: #000000;
            font-family: 'Montserrat', sans-serif;
        }

      .about H1 {
            color: #000000;
            font-size: 36px;
            font-family: 'Montserrat';
            font-weight: 700;
      }

      .team .icon b,

      .inner-width {
          max-width: 1000px;
          overflow: hidden;
          padding: 0 20px;
          margin: auto;
      }

.about-section h1 {
  text-align: center;
}

.border {
  width: 100px;
  height: 3px;
  background: grey;
  margin: 48px auto;
}

.about-section-row {
  display: flex;
  flex-wrap: wrap;
}

.about-section-col {
  flex: 50%;
}

.about {
  padding-right: 30px;
}

.about p {
  text-align: justify;
  margin-bottom: 20px;
}

.about a {
  display: inline-block;
  color: #e74c3c;
  text-decoration: none;
  border: 2px solid #e74c3c;
  border-radius: 24px;
  padding: 8px 40px;
  transition: 0.4s linier;
}

.about a:hover {
  color: #fff;
  background: #e74c3c;
}

@media screen and (max-width: 700px) {
  .about-section-col {
    flex: 100%;
    margin: 100px 0;
  }

  .about,
  .skills {
    padding: 0;
  }

  .about {
    text-align: center;
  }

  .email{
	  font-family: 'Montserrat';
  }
  
  .instagram{
ig:	font-family: 'Montserrat';
  }

  .box{
	  color: #ffffff;
  }

}
    </style>

</head>
<body>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="pr-2" src="{{ asset('img/AA.png') }}" height="60" alt="logo"  >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav " >
                        <li class="nav-item active m-3">
                            <a class="nav-link" href="/">HOME</a>
                        </li>
                        <li class="nav-item active m-3" >
                            <a class="nav-link" href="/team-section">TENTANG KAMI</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active m-3">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active m-3">
                                    <a class="nav-link" href="/pilihdaftar">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
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

        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
