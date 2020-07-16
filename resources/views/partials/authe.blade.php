                       @guest
                           
                            @if (Route::has('register'))
                            <div class="ht-left">
                               <div class="mail-service">
                                  <i class=" fa fa-envelope"></i>
                                  hello.colorlib@gmail.com
                               </div>
                               <div class="phone-service">
                                  <i class=" fa fa-phone"></i>
                                  +65 11.188.888
                                </div>
                            </div>
                            @endif
                        @else
                         

                        <div class="ht-left">
                               <div class="mail-service">
                                  <i class=" fa fa-envelope"></i>
                                  {{ Auth::user()->email }}
                               </div>
                               <div class="phone-service">
                                  <i class=" fa fa-phone"></i>
                                  {{ Auth::user()->tel }}
                                </div>
                        </div>


                        @endguest