@extends('layouts.app')

@section('content')

    <div class="Our-story-area story-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="story-caption">
                    <!--                    <img src="{{ asset('img/our_story/flower_right.png') }}" alt="">-->
                        <h3>Our Story</h3>
                        <p class="story1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="story2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 col-lg-10 offset-lg-3 offset-xl-3">
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
                                        <div class="shape-inner-flower">
                                            <img src="{{ asset('img/flower/form-smoll-left.png') }}" class="top1" alt="">
                                            <img src="{{ asset('img/flower/form-smoll-right.png') }}" class="top2" alt="">
                                            <img src="{{ asset('img/flower/form-smoll-b-left.png') }}"class="top3"  alt="">
                                            <img src="{{ asset('img/flower/form-smoll-b-right.png') }}"class="top4"  alt="">
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
        <!-- shape -->
        <div class="shape-flower d-none d-xl-block">
            <img src=" {{ asset('img/our_story/shape_left.png') }}" class="flower1" alt="">
            <img src=" {{ asset('img/our_story/shape_right.png') }}" class="flower2 " alt="">
        </div>
    </div>


@endsection





