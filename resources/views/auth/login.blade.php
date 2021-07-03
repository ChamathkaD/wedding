@extends('layouts.app')

@section('content')

    <div class="contact-form section-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="form-wrapper">
                        <!-- section tittle -->
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="section-tittle tittle-form text-center">
                                <img src="{{ asset('img/memories/section_tittle_flowre.png') }}" alt="">
                                    <h2>{{ __('Login') }}</h2>
                                </div>
                            </div>
                        </div>

                        @if(session()->has('success'))
                            <x-Alert type="success" :message="session()->get('success')"></x-Alert>
                        @endif

                        <form id="contact-form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-box subject-icon mb-30">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
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
                                        <label for="email">{{ __('Password') }}</label>
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

                                <div class="col-lg-12">
                                    <div class="confirm-checkbox">
                                        <input
                                            type="checkbox"
                                            name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}
                                        >
                                        <label for="remember"></label>
                                    </div>
                                    <p class="text-dark" style="margin-top: -21px; margin-left: 30px;">
                                        {{ __('Remember Me') }}
                                    </p>
                                </div>


                                <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="submit-info">
                                        <button class="btn2" type="submit"> {{ __('Login') }}</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class=" btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>

                            </div>
                        </form>
                        <!-- Shape inner Flower -->
                        <div class="shape-inner-flower">
                            <img src="{{ asset('img/flower/form-smoll-left.png') }}" class="top1" alt="">
                            <img src="{{ asset('img/flower/form-smoll-right.png') }}" class="top2" alt="">
                            <img src="{{ asset('img/flower/form-smoll-b-left.png') }}" class="top3" alt="">
                            <img src="{{ asset('img/flower/form-smoll-b-right.png') }}" class="top4" alt="">
                        </div>
                        <!-- Shape outer Flower -->
                        <div class="shape-outer-flower">
                            <img src="{{ asset('img/flower/from-top.png') }}" class="outer-top" alt="">
                            <img src="{{ asset('img/flower/from-bottom.png') }}" class="outer-bottom" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
