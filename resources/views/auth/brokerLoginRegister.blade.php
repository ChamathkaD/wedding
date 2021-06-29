@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
                <div class="col-6">
                    <div class="contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 offset-lg-12 offset-xl-12">
                                    <div class="form-wrapper">
                                        <!-- section tittle -->
                                        <div class="row ">
                                            <div class="col-lg-12">
                                                <div class="section-tittle tittle-form text-center">
                                                <!--                                <img src="{{ asset('img/memories/section_tittle_flowre.png') }}" alt="">-->
                                                    <h2>Broker Login</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="contact-form" action="#" method="POST">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="email" >{{ __('E-Mail Address') }}</label>
                                                        <input
                                                            id="email"
                                                            type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email"
                                                            value="{{ old('email') }}"
                                                            required
                                                            autocomplete="email"
                                                            placeholder="Email">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="email" >{{ __('Password') }}</label>
                                                        <input
                                                            id="password"
                                                            type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password"
                                                            required
                                                            autocomplete="current-password"
                                                            placeholder="Password"
                                                        >
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">

                                                    <div class="submit-info col-md-1 ">
                                                        <button class="btn2" type="submit"> {{ __('Login') }}</button>
                                                    </div>

                                                </div>

                                                <div class="col-lg-6">
                                                    @if (Route::has('password.request'))
                                                        <a class=" btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>

                                                    @endif
                                                </div>


                                            </div>
                                        </form>
                                        <!-- Shape inner Flower -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="contact-form ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 offset-lg-12 offset-xl-12">
                                    <div class="form-wrapper">

                                        <div class="row ">
                                            <div class="col-lg-12">
                                                <div class="section-tittle tittle-form text-center">
                                                <!--                                                <img src="{{ asset('img/memories/section_tittle_flowre.png') }}" alt="">-->
                                                    <h2>Broker Register</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="contact-form" action="#" method="POST">
                                            @csrf

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="firstName" >First Name</label>
                                                        <input
                                                            type="text"
                                                            name="firstName"
                                                            placeholder="First Name"
                                                            id="firstName"
                                                            class="form-control @error('firstName') is-invalid @enderror"
                                                            value="{{ old('firstName') }}"
                                                            required autocomplete="firstName"

                                                        >
                                                        @error('firstName')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="lastName" >Last Name</label>
                                                        <input
                                                            type="text"
                                                            name="lastName"
                                                            placeholder="Last Name"
                                                            id="lastName"
                                                            class="form-control @error('lastName') is-invalid @enderror"
                                                            value="{{ old('lastName') }}"
                                                            required autocomplete="lastName"

                                                        >
                                                        @error('lastName')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="name" >Email</label>
                                                        <input
                                                            type="email"
                                                            placeholder="Email"
                                                            id="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email"
                                                            value="{{ old('email') }}"
                                                            required
                                                            autocomplete="email"
                                                        >
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="nic" >ID Number</label>
                                                        <input
                                                            type="text"
                                                            name="nic"
                                                            placeholder="ID Number"
                                                            id="nic"
                                                            class="form-control @error('nic') is-invalid @enderror"
                                                            value="{{ old('nic') }}"
                                                            required autocomplete="nic"

                                                        >
                                                        @error('nic')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="phone" >Phone No</label>
                                                        <input
                                                            type="text"
                                                            name="phone"
                                                            placeholder="Phone No"
                                                            id="phone"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            value="{{ old('phone') }}"
                                                            required autocomplete="phone"

                                                        >
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </div>





                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="name" >Password</label>
                                                        <input
                                                            type="password"
                                                            placeholder=" Password"
                                                            id="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password"
                                                            value="{{ old('email') }}"
                                                            required
                                                            autocomplete="new-password"
                                                        >
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="name" >Password</label>
                                                        <input
                                                            type="password"
                                                            placeholder="Confirm Password"
                                                            id="password-confirm"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password_confirmation"
                                                            value="{{ old('email') }}"
                                                            required
                                                            autocomplete="new-password"
                                                        >
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror


                                                    </div>
                                                </div>



                                                <div class="col-lg-12">

                                                    <div class="submit-info">
                                                        <button class="btn2" type="submit">Register</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>



@endsection
