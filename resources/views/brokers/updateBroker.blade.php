@extends('layouts.app')

@section('content')


    <div class="contact-form section-padding2 fix">

        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 offset-lg-12 offset-xl-12">
                    <div class="form-wrapper">
                        <!-- section tittle -->

                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                                <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                        @endif

                        <div class="row ">
                            <div class="col-lg-12">


                                <div class="section-tittle tittle-form text-center">

                                    <h2>Broker Profile</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="{{ route('broker.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

<!--                            <div class="col-lg-6">
                                <div class="story-caption">
                                    <h4>Personal Information</h4>

                                </div>
                            </div>-->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="text"
                                            name="firstName"
                                            placeholder="First Name"
                                            class="form-control @error('firstName') is-invalid @enderror"
                                            id="firstName"
                                            value="{{ Auth::user()->firstName }}"
                                        >
                                        @error('firstName')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box subject-icon mb-30">
                                        <input
                                            type="text"
                                            name="middleName"
                                            placeholder="Middle Name"
                                            class="form-control @error('middleName') is-invalid @enderror"
                                            id="middleName"
                                            value="{{ Auth::user()->middleName }}"
                                        >
                                        @error('middleName')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box subject-icon mb-30">
                                        <input
                                            type="text"
                                            name="lastName"
                                            placeholder="Last Name"
                                            class="form-control @error('lastName') is-invalid @enderror"
                                            id="lastName"
                                            value="{{ Auth::user()->lastName }}"
                                        >
                                        @error('lastName')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="text"
                                            name="nicName"
                                            placeholder="Nic Name"
                                            class="form-control @error('nicName') is-invalid @enderror"
                                            id="nicName"
                                            value="{{ Auth::user()->nicName }}"
                                        >
                                        @error('nicName')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="date"
                                            name="birthday"
                                            placeholder="Birthday"
                                            class="form-control @error('birthday') is-invalid @enderror"
                                            id="birthday"
                                            value="{{ Auth::user()->birthday }}"
                                        >
                                        @error('birthday')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="select-itms">
                                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" >
                                            <option selected disabled value="{{ Auth::user()->gender }}">Gender</option>
                                            <option value="male" >Male</option>
                                            <option value="female" >Female</option>

                                        </select>
                                        @error('gender')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-box subject-icon mb-30">
                                        <input
                                            type="Email"
                                            name="email"
                                            placeholder="Email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            id="email"
                                            value="{{ Auth::user()->email }}"
                                        >
                                        @error('email')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input type="text"
                                               name="phone"
                                               placeholder="Phone1 No1"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               id="phone"
                                               value="{{ Auth::user()->phone }}"
                                        >
                                        @error('phone')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="text"
                                            name="whatsApp"
                                            placeholder="WhatsApp No"
                                            class="form-control @error('whatsApp') is-invalid @enderror"
                                            id="whatsApp"
                                            value="{{ Auth::user()->whatsApp }}"
                                        >
                                        @error('whatsApp')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input type="text"
                                               name="addressLine1"
                                               placeholder="address line1"
                                               class="form-control @error('addressLine1') is-invalid @enderror"
                                               id="addressLine1"
                                               value="{{ Auth::user()->addressLine1 }}"
                                        >
                                        @error('addressLine1')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input type="text"
                                               name="addressLine2"
                                               placeholder="address line2"
                                               class="form-control @error('addressLine2') is-invalid @enderror"
                                               id="addressLine2"
                                               value="{{ Auth::user()->addressLine2 }}"
                                        >
                                        @error('addressLine2')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="text"
                                            name="addressLine3"
                                            placeholder="address line3"
                                            class="form-control @error('addressLine3') is-invalid @enderror"
                                            id="addressLine3"
                                            value="{{ Auth::user()->addressLine3 }}"
                                        >
                                        @error('addressLine3')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">


                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="text"
                                            name="nic"
                                            placeholder="NIC No"
                                            class="form-control @error('nic') is-invalid @enderror"
                                            id="nic"
                                            value="{{ Auth::user()->nic }}"
                                        >
                                        @error('nic')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input
                                            type="text"
                                            name="fb"
                                            placeholder="Facebook Link"
                                            class="form-control @error('fb') is-invalid @enderror"
                                            id="fb"
                                            value="{{ Auth::user()->fb }}"
                                        >
                                        @error('fb')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-box subject-icon mb-30">
                                        <input
                                            type="Email"
                                            name="ig"
                                            placeholder="Instagram Link"
                                            class="form-control @error('ig') is-invalid @enderror"
                                            id="ig"
                                            value="{{ Auth::user()->ig }}"
                                        >
                                        @error('ig')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>


                            </div>










                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <label>
                                            Select your Profile Picture
                                        </label>

                                        <input
                                            type="file"
                                            name="image"
                                            placeholder="Image"
                                            class="form-control @error('image') is-invalid @enderror"
                                            id="image"
                                            value="{{ Auth::user()->image }}"

                                        >
                                        @error('image')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                        @enderror

                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="submit-info">
                                        <button class="btn2" type="submit" class="form-control">Create</button>
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
