@extends('layouts.app')

@section('content')

    <style>
        .story-caption li:before {
            content: '';
            display: inline-block;
            height: 25px;
            width: 35px;
            background-image: url({{ asset('img/check-green.png') }});
            background-size: contain;
            background-repeat: no-repeat;
            margin-left: -35px;
            vertical-align: top;
        }
        ul li {
            margin-bottom: 20px;
        }
    </style>

    <div class="contact-form section-padding fix">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 section-tittle">
                    <div class="story-caption">
                        <ul>
                            <li>Registration fee: 500 LKR</li>
                            <li>You can deposit your money through a Bank deposit, online banking, deposit machine or eZ Cash</li>
                            <li>A snapshot of your bank slip or a screenshot of your online payment must be uploaded.</li>

                            <li>Your information is only visible to our registered and verified users. Your information will not be exposed to any third party for any reason.</li>
                            <li>We protect your anonymity 100% and make it easy for you to decide which information you will disclose to whom.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 offset-lg-3">
                                <div class="form-wrapper">
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="section-tittle text-center">
                                                <h2>Register</h2>
                                            </div>
                                        </div>
                                        <form id="contact-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="first_name">First Name</label>
                                                        <input
                                                            type="text"
                                                            name="first_name"
                                                            placeholder="First Name"
                                                            id="first_name"
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            value="{{ old('first_name') }}"
                                                            required autocomplete="first_name"

                                                        >
                                                        @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="last_name">Last Name</label>
                                                        <input
                                                            type="text"
                                                            name="last_name"
                                                            placeholder="Last Name"
                                                            id="last_name"
                                                            class="form-control @error('last_name') is-invalid @enderror"
                                                            value="{{ old('last_name') }}"
                                                            required autocomplete="last_name"

                                                        >
                                                        @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="email">Email</label>
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
                                                    <div class="form-box mb-30">
                                                        <label for="birthday">Birthday</label>
                                                        <input
                                                            type="date"
                                                            name="birthday"
                                                            id="birthday"
                                                            class="form-control @error('birthday') is-invalid @enderror"
                                                            value="{{ old('birthday') }}"
                                                            required
                                                            autocomplete="birthday"
                                                        >
                                                        @error('birthday')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-box subject-icon mb-30">
                                                        <label for="password">Password</label>
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
                                                        <label for="password-confirm">Re-enter Password</label>
                                                        <input
                                                            type="password"
                                                            placeholder="Confirm Password"
                                                            id="password-confirm"
                                                            class="form-control"
                                                            name="password_confirmation"
                                                            required
                                                            autocomplete="new-password"
                                                        >
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 text-center mt-4">
                                                    <div class="submit-info">
                                                        <button class="btn2" type="submit">{{ __('Register') }}</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <div class="shape-inner-flower">
                                            <img src="{{ asset('img/flower/form-smoll-left.png') }}" class="top1"
                                                 alt="">
                                            <img src="{{ asset('img/flower/form-smoll-right.png') }}" class="top2"
                                                 alt="">
                                            <img src="{{ asset('img/flower/form-smoll-b-left.png') }}" class="top3"
                                                 alt="">
                                            <img src="{{ asset('img/flower/form-smoll-b-right.png') }}" class="top4"
                                                 alt="">
                                        </div>

                                        <div class="shape-outer-flower">
                                            <img src="{{ asset('img/flower/from-top.png') }}" class="outer-top" alt="">
                                            <img src="{{ asset('img/flower/from-bottom.png') }}" class="outer-bottom" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




