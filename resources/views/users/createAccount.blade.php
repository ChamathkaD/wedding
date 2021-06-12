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

                                <h2>Create Profile</h2>
                            </div>
                        </div>
                    </div>
                    <form id="contact-form" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-6">
                            <div class="story-caption">
                                <h4>Personal Information</h4>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="firstName" placeholder="First Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box subject-icon mb-30">
                                    <input type="Email" name="middleName" placeholder="Middle Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box subject-icon mb-30">
                                    <input type="Email" name="lastName" placeholder="Last Name" class="form-control">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="nicName" placeholder="Nic Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="date" name="birthday" placeholder="Birthday" class="form-control"
                                           value="{{ old('birthday') }}">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="gender" id="gender" class="form-control">
                                        <option selected disabled>Gender</option>
                                        <option value="male" >Male</option>
                                        <option value="female" >Female</option>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-box subject-icon mb-30">
                                    <input type="Email" name="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="phone" placeholder="Phone1 No1" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="whatsApp" placeholder="WhatsApp No" class="form-control">
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="addressLine1" placeholder="address line1" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="addressLine2" placeholder="address line2" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="addressLine3" placeholder="address line3" class="form-control">
                                </div>
                            </div>
                        </div>


                            <div class="row">


                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="nic" placeholder="NIC No" class="form-control">
                                </div>
                            </div>

                                <div class="col-lg-4">
                                    <div class="select-itms" >
                                        <select name="jobType" id="jobType" class="form-control">
                                            <option selected disabled >Job Type</option>
                                            <option value="Government">Government</option>
                                            <option value="Privet">Privet</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <input type="text" name="jobPost" placeholder="Job Post" class="form-control">
                                    </div>
                                </div>

                        </div>

                        <div class="row">



                        </div>



                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="weight" placeholder="Weight(Kg)" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="height" placeholder="Height(inches)" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="feature" id="feature" class="form-control">
                                        <option selected disabled>Feature</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Whitish">Whitish</option>
                                        <option value="Whitish Medium">Whitish Medium</option>
                                        <option value="Whitish Brown">Whitish Brown</option>
                                        <option value="Dark">Dark</option>

                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="nationality" id="nationality" class="form-control">
                                        <option selected disabled>Nationality</option>
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Muslim">Muslim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="religion" id="religion" class="form-control">
                                        <option selected disabled>Religion</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Christians">Christians</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="motherTongue" id="motherTongue" class="form-control">
                                        <option selected disabled>Mother Tongue</option>
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="English">English</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>


                        </div>


                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="maritalStatus" id="maritalStatus" class="form-control">
                                        <option selected disabled>marital status</option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Divorce">Divorce</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="select-itms">
                                    <select name="horoscope" id="horoscope" class="form-control">
                                        <option selected disabled>Horoscope</option>
                                        <option value="Aries ">Aries </option>
                                        <option value="Taurus">Taurus</option>
                                        <option value="Gemini ">Gemini </option>
                                        <option value="Cancer ">Cancer </option>
                                        <option value="Leo ">Leo </option>
                                        <option value="Virgo ">Virgo </option>
                                        <option value="Libra ">Libra </option>
                                        <option value="Scorpio ">Scorpio </option>
                                        <option value="Sagittarius ">Sagittarius </option>
                                        <option value="Capricorn ">Capricorn </option>
                                        <option value="Aquarius ">Aquarius </option>
                                        <option value="Pisces ">Pisces </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="hobby" placeholder="Hobby" class="form-control">
                                </div>
                            </div>


                        </div>



                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="school" placeholder="School or University" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="select-itms">
                                    <select name="education" id="education">
                                        <option selected disabled>Education</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="O/L">O/L</option>
                                        <option value="A/L">A/L</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="country" placeholder="Country of birth" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="city" placeholder="City of birth" class="form-control">
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="sd" placeholder="Smoking or Drinking" class="form-control">



                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-box mb-30">
                                    <input type="text" name="fb" placeholder="Facebook Link" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-box subject-icon mb-30">
                                    <input type="Email" name="ig" placeholder="Instagram Link" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-box message-icon mb-30">
                                    <textarea name="aboutYou" id="message" placeholder="About You" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-box mb-30">
                                        <label>
                                            Select your Profile Picture
                                        </label>

                                        <input type="file" name="image" placeholder="Image" class="form-control">

                                    </div>
                                </div>

                            </div>

                        <div class="col-lg-6">
                            <div class="story-caption">
                                <h4>Family Information</h4>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="select-itms">
                                    <select name="brother" id="brother" class="form-control">
                                        <option selected disabled>brothers</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="select-itms">
                                    <select name="sister" id="sister" class="form-control">
                                        <option selected disabled>sisters</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">

                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="fatherName" placeholder="Father's Name" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="motherName" placeholder="Mother's Name" class="form-control">
                                </div>
                            </div>
                        </div>

                    <div class="row">


                        <div class="col-lg-12">
                            <div class="form-box message-icon mb-30">
                                <textarea name="otherDetails" id="message" placeholder="Other Details" class="form-control"></textarea>
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
