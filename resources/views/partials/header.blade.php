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
                                <li><a href="{{ url('aboutUs') }}">About Us</a></li>
                                <li><a href="{{url('contact')}}">contact</a></li>
                                @guest
                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif

                                    <li>
                                        <a href="{{ route('broker.show.auth') }}" style="color: #800098" class="font-weight-bold"> Broker?</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="#" class="font-weight-bold">
                                            {{ Auth::user()->full_name }}
                                        </a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="{{ route('account.index') }}">
                                                    My Account
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('account.show.change.password') }}">
                                                    Change Password
                                                </a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt mr-2"></i>
                                                    {{ __('Logout') }}
                                                </a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>

                                        </ul>
                                    </li>
                                @endguest
                                <li>
                                    <a href="#">සිංහල</a>
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
