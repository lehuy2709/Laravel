       <!--Top Header-->
       <div class="top-header home15-funiture-top">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                       <div class="currency-picker">
                           <span class="selected-currency">USD</span>
                           <ul id="currencies">
                               <li data-currency="INR" class="">INR</li>
                               <li data-currency="GBP" class="">GBP</li>
                               <li data-currency="CAD" class="">CAD</li>
                               <li data-currency="USD" class="selected">USD</li>
                               <li data-currency="AUD" class="">AUD</li>
                               <li data-currency="EUR" class="">EUR</li>
                               <li data-currency="JPY" class="">JPY</li>
                           </ul>
                       </div>
                       <div class="language-dropdown">
                           <span class="language-dd">English</span>
                           <ul id="language">
                               <li class="">German</li>
                               <li class="">French</li>
                           </ul>
                       </div>
                       <p class="phone-no"><i class="anm anm-phone-s"></i> +84931391358</p>
                   </div>
                   <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                       <div class="text-center">
                           <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                       </div>
                   </div>
                   <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                       <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                               aria-hidden="true"></i></span>
                       <ul class="customer-links list-inline">
                           @if (Auth::check())
                               <li><a href="">{{ Auth::user()->name }}</a></li>
                               <li><a href="{{ Route('logout') }}">Logout</a></li>
                           @else
                               <li><a href="{{ Route('auth.getLogin') }}">Login</a></li>
                               <li><a href="{{ Route('auth.getRegister') }}">Create Account</a></li>
                           @endif


                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <!--End Top Header-->
