@extends('layouts.app')

@section('content')

    <div class="contact-form section-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 section-tittle">
                    <div class="story-caption">
                        <h2>Our Story</h2>
                        <ul class="unordered-list">
                            <li>Lorem ipsum dolor.</li>
                            <li>Lorem ipsum dolor.</li>
                            <li>Lorem ipsum dolor.</li>
                            <li>Lorem ipsum dolor.</li>
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
                                        <form id="contact-form" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-box mb-10">
                                                        <label for="firstName">First Name</label>
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
                                                        <label for="lastName">Last Name</label>
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
                                                        <label for="name">Email</label>
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
                                                        <label for="name">Birthday</label>
                                                        <input
                                                            type="date"
                                                            name="birthday"
                                                            placeholder="mm/dd/yyyy"
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
                                                        <label for="name">Password</label>
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
                                                        <label for="name">Password</label>
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
                                                    <label for="name">Select Payment Method</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input payment_method" id="ez_cash" name="payment_method" value="ez_cash">
                                                        <label class="custom-control-label" for="ez_cash">via Dialog ez cash</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input payment_method" id="bank_deposit" name="payment_method" value="bank_deposit">
                                                        <label class="custom-control-label" for="bank_deposit">via Bank Deposit</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mt-2 mb-2">
                                                    <input type="file" id="bank_slip" style="display:none;">
                                                    <input
                                                        type="text"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="dialog_mobile"
                                                        placeholder="Enter your ez cash dialog number"
                                                        id="dialog_mobile"
                                                        style="display:none;"
                                                    >
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
                                            <img src="{{ asset('img/flower/from-bottom.png') }}" class="outer-bottom"
                                                 alt="">
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

@push('js')

    <script>
        $(document).ready(function () {

            /* handle payment methods */
            $(".payment_method").on('change', function () {
                let val = $('input[name=payment_method]:checked').val()
                if (val == "ez_cash") {
                    $("#bank_slip").hide();
                    $("#dialog_mobile").show();
                } else {
                    $("#bank_slip").show();
                    $("#dialog_mobile").hide();
                }
            });

        })
    </script>

@endpush




