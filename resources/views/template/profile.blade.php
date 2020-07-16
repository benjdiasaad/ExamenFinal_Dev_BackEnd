<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
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
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
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
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="{{asset('img/select-product-1.jpg') }}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="{{asset('img/select-product-2.jpg') }}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
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
            <h3> Compte </h4>
            <h4> {{ Auth::user()->name }} {{Auth::user()->prenom}}, {{Auth::user()->email}}, <a href="#"> aller au profil </a>
        </div>
    </section>
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
            
               <div class="col-lg-4 col-md-6">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Infos Personnells
                                </div>
                            </div>
                            <a href="#">
                                <h4> 
                                    Fournissez des enseignements personnels et indiquez comment nous prouvons
                                    vous joindre
                                </h4>
                            </a>
                        </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Infos Personnells
                                </div>
                            </div>
                            <a href="#">
                                <h4> 
                                    Fournissez des enseignements personnels et indiquez comment nous prouvons
                                    vous joindre
                                </h4>
                            </a>
                        </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Infos Personnells
                                </div>
                            </div>
                            <a href="#">
                                <h4> 
                                    Fournissez des enseignements personnels et indiquez comment nous prouvons
                                    vous joindre
                                </h4>
                            </a>
                        </div>
                 </div>
                </div>
            </div>
        </section> 
        <section class="latest-blog spad">
            <div class="container">      
                <div class="row">
                 <div class="col-lg-4 col-md-6">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Infos Personnells
                                </div>
                            </div>
                            <a href="#">
                                <h4> 
                                    Fournissez des enseignements personnels et indiquez comment nous prouvons
                                    vous joindre
                                </h4>
                            </a>
                        </div>
                 </div>
                 
                 <div class="col-lg-4 col-md-6">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Infos Personnells
                                </div>
                            </div>
                            <a href="#">
                                <h4> 
                                    Fournissez des enseignements personnels et indiquez comment nous prouvons
                                    vous joindre
                                </h4>
                            </a>
                        </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Infos Personnells
                                </div>
                            </div>
                            <a href="#">
                                <h4> 
                                    Fournissez des enseignements personnels et indiquez comment nous prouvons
                                    vous joindre
                                </h4>
                            </a>
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