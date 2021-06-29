<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        {{ config('app.name', 'Laravel') }}
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">

                                @guest

                                    <li><a href="contact.html">contact</a></li>


                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li><a href="{{ route('personal.info') }}">Personal Information</a></li>
                                    <li><a href="{{ route('family.info') }}">Family Information</a></li>
                                    <li><a href="{{route('show.user')}}">Users</a></li>
                                    <li><a href="#">{{ Auth::user()->firstName }}</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('create.user.account') }}">Edit Profile</a></li>

                                            <li><a href="{{ route('password.show') }}">Change Password</a></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>

                                        </ul>
                                    </li>
                                @endguest
                                <li><a href="#" style="color: #800098"> Broker?</a>
                                    <ul class="submenu ">
                                        <li><a href="{{ route('broker.register') }} ">Register</a></li>
                                        <li><a href="{{ route('broker.login') }}">Login</a></li>
                                    </ul>

                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
