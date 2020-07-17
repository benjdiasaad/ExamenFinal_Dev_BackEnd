<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student | Coloco</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/st.png') }}">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <style>
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #C70759;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

    </style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
    <div class="header-top">
            <div class="container">
                       @include('partials.authe') 
                <div class="ht-right">
                          @guest
                           @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="login-panel"><i class="fa fa-user"></i> {{ __('Login') }} </a>
                           @endif
                           @else
                               <a href="{{ url('/profile') }}" class="login-panel"><i class="fa fa-user"></i> {{ Auth::user()->name }} </a>
                           @endguest 
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{{asset('img/flag-1.jpg') }}" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="{{asset('img/flag-2.jpg') }}" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{asset('img/st.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    @include('partials.search') 
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
              
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ url('/index') }}">Liste offres</a></li>
                        <li><a href="{{ url('/blog') }}">Liste demandes</a></li>
                        <li><a href="{{ url('/shop') }}">Créer offre</a></li>
                        <li><a href="{{ url('/detail') }}">Créer demande</a> </li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>{{ $offre->typlog }}</h4>
                        <p>{{ $offre->des }}.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>{{ $offre->adresse }}</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-list"></i>
                            </div>
                            <div class="ci-text">
                                <span>Les Privilèges :</span>
                                <p>{{ $offre->privilege }}</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-money"></i>
                            </div>
                            <div class="ci-text">
                                <span>Prix :</span>
                                <p>{{ $offre->prix }} DH</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-layout-sidebar-left"></i>
                            </div>
                            <div class="ci-text">
                                <span>Superficé :</span>
                                <p>{{ $offre->superficie }} Mètres carrés</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-hand-point-up"></i>
                            </div>
                            <div class="ci-text">
                                <span>Capacité :</span>
                                <p>{{ $offre->capacite}} Personnes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="padding: 200px 0 120px;">
                  <div class="col-md-9">
                            <img src="{{ $offre->imgPath }}" style="width: 590px;height: 300px;margin-left:170px;" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="">
                  </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{asset('js/jquery.dd.min.js') }}"></script>
    <script src="{{asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
</body>

</html>