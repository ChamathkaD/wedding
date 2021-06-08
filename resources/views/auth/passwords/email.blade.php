@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->


<div class="contact-form section-padding2 fix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                <div class="form-wrapper">
                    <!-- section tittle -->
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="section-tittle tittle-form text-center">
<!--                                <img src="assets/img/memories/section_tittle_flowre.png" alt="">-->
                                <h2>{{ __('Reset Password') }}</h2>
                            </div>
                        </div>
                    </div>
                    <form id="contact-form" action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-box subject-icon mb-30">
                                    <input
                                        id="email"
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required autocomplete="email"
                                        autofocus
                                        placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">

                                <div class="submit-info">
                                    <button class="btn2" type="submit"> {{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Shape inner Flower -->
                    <div class="shape-inner-flower">
                        <img src="{{ asset('img/flower/form-smoll-left.png') }}" class="top1" alt="">
                        <img src="{{ asset('img/flower/form-smoll-right.png') }}" class="top2" alt="">
                        <img src="{{ asset('img/flower/form-smoll-b-left.png') }}"class="top3"  alt="">
                        <img src="{{ asset('img/flower/form-smoll-b-right.png') }}"class="top4"  alt="">
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
