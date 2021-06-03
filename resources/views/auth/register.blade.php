@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->




<div class="Our-story-area story-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--                <div class="story-img mb-100">
                                    <img src="assets/img/our_story/story-img.jpg" class="story-imges" alt="">
                                    &lt;!&ndash; shape flower &ndash;&gt;
                                    <div class="shape-flower-img">
                                        <img src="assets/img/our_story/flower_top.png" class="flower-top" alt="">
                                    </div>
                                </div>-->
// registrationform
                <div class="contact-form section-padding2 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                                <div class="form-wrapper">
                                    <!-- section tittle -->
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="section-tittle tittle-form text-center">
                                                <img src="{{ asset('img/memories/section_tittle_flowre.png') }}" alt="">
                                                <h2>Register</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="contact-form" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-box mb-30">
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        placeholder="Name"
                                                        id="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        value="{{ old('name') }}"
                                                        required autocomplete="name"

                                                    >
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-box subject-icon mb-30">
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
                                                    <input
                                                        type="date"
                                                        name="birthday"
                                                        placeholder="Birthday"
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
                                                    <input
                                                        type="password"
                                                        placeholder="Password"
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
                                                    <input
                                                        type="password"
                                                        placeholder="Password"
                                                        id="password-confirm"
                                                        class="form-control "
                                                        name="password_confirmation"
                                                        value="{{ old('email') }}"
                                                        required
                                                        autocomplete="new-password"
                                                    >

                                                </div>
                                            </div>



                                            <div class="col-lg-12">

                                                <div class="submit-info">
                                                    <button class="btn2" type="submit">{{ __('Register') }}</button>
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



            </div>
            <div class="col-lg-6">
                <div class="story-caption">
                    <img src="{{ asset('img/our_story/flower_right.png') }}" alt="">
                    <h3>Our Story</h3>
                    <p class="story1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="story2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- shape -->
    <div class="shape-flower d-none d-xl-block">
        <img src="assets/img/our_story/shape_left.png" class="flower1" alt="">
        <img src="assets/img/our_story/shape_right.png" class="flower2 " alt="">
    </div>
</div>


@endsection





