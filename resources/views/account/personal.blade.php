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
            <div class="select-itms" >
                <select name="jobType" id="jobType" class="form-control  @error('jobType') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->jobType }}">Job Type</option>
                    <option value="Government">Government</option>
                    <option value="Privet">Privet</option>
                </select>
                @error('jobType')
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
                    name="jobPost"
                    placeholder="Job Post"
                    class="form-control @error('jobPost') is-invalid @enderror"
                    id="jobPost"
                    value="{{ Auth::user()->jobPost }}"
                >
                @error('jobPost')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

    </div>


    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="form-box mb-30">
                <input
                    type="text"
                    name="weight"
                    placeholder="Weight(Kg)"
                    class="form-control @error('weight') is-invalid @enderror"
                    id="weight"
                    value="{{ Auth::user()->weight }}"
                >
                @error('weight')
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
                    name="height"
                    placeholder="Height(inches)"
                    class="form-control @error('height') is-invalid @enderror"
                    id="height"
                    value="{{ Auth::user()->height }}"
                >
                @error('height')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-4">
            <div class="select-itms">
                <select name="feature" id="feature" class="form-control @error('feature') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->feature }}">Feature</option>
                    <option value="Fair">Fair</option>
                    <option value="Whitish">Whitish</option>
                    <option value="Whitish Medium">Whitish Medium</option>
                    <option value="Whitish Brown">Whitish Brown</option>
                    <option value="Dark">Dark</option>

                </select>
                @error('feature')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>


    </div>

    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="select-itms">
                <select name="nationality" id="nationality" class="form-control @error('nationality') is-invalid @enderror" >
                    <option selected disabled value="{{ Auth::user()->nationality }}">Nationality</option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslim">Muslim</option>
                </select>
                @error('nationality')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-4">
            <div class="select-itms">
                <select name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror ">
                    <option selected disabled value="{{ Auth::user()->religion }}">Religion</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Christians">Christians</option>
                </select>
                @error('religion')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-4">
            <div class="select-itms">
                <select name="motherTongue" id="motherTongue" class="form-control @error('motherTongue') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->motherTongue }}">Mother Tongue</option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option>
                    <option value="English">English</option>
                    <option value="Other">Other</option>
                </select>
                @error('motherTongue')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>


    </div>


    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="select-itms">
                <select name="maritalStatus" id="maritalStatus" class="form-control @error('maritalStatus') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->maritalStatus }}">marital status</option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Divorce">Divorce</option>

                </select>
                @error('maritalStatus')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-4">
            <div class="select-itms">
                <select name="horoscope" id="horoscope" class="form-control @error('horoscope') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->horoscope }}">Horoscope</option>
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
                @error('horoscope')
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
                    name="hobby"
                    placeholder="Hobby"
                    class="form-control @error('hobby') is-invalid @enderror"
                    id="hobby"
                    value="{{ Auth::user()->hobby }}"
                >
                @error('hobby')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>


    </div>



    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="form-box mb-30">
                <input
                    type="text"
                    name="school"
                    placeholder="School or University"
                    class="form-control @error('school') is-invalid @enderror"
                    id="school"
                    value="{{ Auth::user()->school }}"
                >
                @error('school')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="select-itms">
                <select name="education" id="education" class="form-control @error('education') is-invalid @enderror">
                    <option selected disabled value="{{ Auth::user()->education }}">Education</option>
                    <option value="Degree">Degree</option>
                    <option value="Diploma">Diploma</option>
                    <option value="O/L">O/L</option>
                    <option value="A/L">A/L</option>
                </select>
                @error('education')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

    </div>


    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="form-box mb-30">
                <input
                    type="text"
                    name="country"
                    placeholder="Country of birth"
                    class="form-control @error('country') is-invalid @enderror"
                    id="country"
                    value="{{ Auth::user()->country }}"
                >
                @error('country')
                <small class="invalid-feedback">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-box mb-30">
                <input
                    type="text"
                    name="city"
                    placeholder="City of birth"
                    class="form-control @error('city') is-invalid @enderror"
                    id="city"
                    value="{{ Auth::user()->city }}"
                >
                @error('city')
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
                    name="sd"
                    placeholder="Smoking or Drinking"
                    class="form-control @error('sd') is-invalid @enderror"
                    id="sd"
                    value="{{ Auth::user()->sd }}"
                >
                @error('sd')
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
        <div class="col-lg-12">
            <div class="form-box message-icon mb-30">
                                    <textarea
                                        name="aboutYou"
                                        id="aboutYou"
                                        placeholder="About You"
                                        class="form-control @error('aboutYou') is-invalid @enderror">{{ Auth::user()->aboutYou }}</textarea>
                @error('aboutYou')
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
