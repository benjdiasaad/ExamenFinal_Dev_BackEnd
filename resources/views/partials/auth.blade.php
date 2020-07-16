                        @guest
                           <!-- <li>
                                <a href="{{ route('login') }}" style="margin-left:80px;">{{ __('Login') }}</a>
                            </li>-->
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="login-panel"><i class="fa fa-user"></i> {{ __('Login') }} </a>
                            @endif
                        @else
                         

                                     <a href="#" class="login-panel"><i class="fa fa-user"></i> {{ Auth::user()->name }} </a>

                        @endguest