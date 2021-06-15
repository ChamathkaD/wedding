@extends('layouts.app')
@section('content')

    <div class="contact-form section-padding2 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="form-wrapper">

                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                                <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                    @endif
                        <!-- section tittle -->
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="section-tittle tittle-form text-center">
                                    <img src="assets/img/memories/section_tittle_flowre.png" alt="">
                                    <h2>Change Password</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="{{ route('password.update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box mb-30">
                                        <input
                                            type="password"
                                            class="form-control @error('current_password') is-invalid @enderror"
                                            placeholder="Current password"
                                            name="current_password"
                                            id="current_password"
                                        >
                                        @error('current_password')
                                        <small class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle mr-2"></i>
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-box mb-30">
                                        <input
                                            type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="New Password"
                                            name="password"
                                            id="password"
                                        >
                                        @error('password')
                                        <small class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle mr-2"></i>
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-box mb-30">
                                        <input
                                            type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Re enter your new password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                        >
                                        @error('password_confirmation')
                                        <small class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle mr-2"></i>
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="submit-info">
                                        <button class="btn2" type="submit">Update Password</button>
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
