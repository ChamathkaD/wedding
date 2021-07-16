@extends('layouts.app')

@push('css')

    <style>
        .single-input-secondary:focus, .single-textarea:focus {
            outline:none;border:1px solid #a903c8
        }

        h4, small {
            margin-bottom: 0;
            color: #a903c8;
        }

        .heading-icon i {
            color: #a903c8 !important;
        }
    </style>

@endpush

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-sm-9 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-user mr-2"></i>
                    Personal Information
                </h4>

                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                @endif


                <form action="{{ route('account.personal.save') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="py-3">

                        @if(\Illuminate\Support\Facades\Auth::user()->image)
                            <img src="{{ asset('img/users/'. Auth::user()->image) }}" width="100" alt="{{ Auth::user()->image }}">
                        @else
                            <img src="{{ asset('img/default.gif') }}" alt="default" width="100">
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Upload Your Photo</label>
                        <br>
                        <input
                            type="file"
                            id="image"
                            name="image"
                            class="@error('image') is-invalid @enderror"
                        >
                        @error('image')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                        <small class="help-block">* Lorem ipsum dolor.</small>
                    </div>

                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            placeholder="Enter First Name"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter First Name'"
                            class="single-input-secondary @error('first_name') is-invalid @enderror"
                            value="{{ Auth::user()->first_name }}"
                        >
                        @error('first_name')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input
                            type="text"
                            id="middle_name"
                            name="middle_name"
                            placeholder="Enter Middle Name"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Middle Name'"
                            class="single-input-secondary   @error('middle_name') is-invalid @enderror"
                            value="{{ Auth::user()->middle_name }}"
                        >
                        @error('middle_name')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            placeholder="Enter Last Name"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Last Name'"
                            class="single-input-secondary @error('last_name') is-invalid @enderror"
                            value="{{ Auth::user()->last_name }}"
                        >
                        @error('last_name')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nic_name" class="form-label">NIC Name</label>
                        <input
                            type="text"
                            id="nic_name"
                            name="nic_name"
                            placeholder="Enter NIC Name"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter NIC Name'"
                            class="single-input-secondary @error('nic_name') is-invalid @enderror"
                            value="{{ Auth::user()->nic_name }}"
                        >
                        <small class="help-block">* Lorem ipsum dolor.</small>
                        @error('nic_name')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter Email"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Email'"
                            class="single-input-secondary @error('email') is-invalid @enderror"
                            value="{{ Auth::user()->email }}"
                        >
                        @error('email')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-4">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input
                                type="date"
                                id="birthday"
                                name="birthday"
                                placeholder="Enter Birthday"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Birthday'"
                                class="single-input-secondary @error('birthday') is-invalid @enderror"
                                value="{{ Auth::user()->birthday }}"
                            >
                            @error('birthday')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('gender') is-invalid @enderror"
                                    name="gender"
                                    id="gender"
                                >
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                placeholder="Enter Phone"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Phone'"
                                class="single-input-secondary @error('phone') is-invalid @enderror"
                                value="{{ Auth::user()->phone }}"
                            >
                            <small class="help-block">* Lorem ipsum dolor.</small>
                            @error('phone')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-4">
                            <label for="whatsapp" class="form-label">Whatsapp Number</label>
                            <input
                                type="text"
                                id="whatsapp"
                                name="whatsapp"
                                placeholder="Enter Whatsapp Number"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Whatsapp Number'"
                                class="single-input-secondary @error('whatsapp') is-invalid @enderror"
                                value="{{ Auth::user()->whatsapp }}"
                            >
                            <small class="help-block">* Lorem ipsum dolor.</small>
                            @error('whatsapp')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="nationality" class="form-label">Nationality</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('nationality') is-invalid @enderror"
                                    name="nationality"
                                    id="nationality"
                                >
                                    <option value="Sinhalese">Sinhalese</option>
                                    <option value="Sri Lankan Tamil">Sri Lankan Tamil</option>
                                    <option value="Sri Lankan Moor">Sri Lankan Moor</option>
                                    <option value="Indian Tamil">Indian Tamil</option>
                                    <option value="Sri Lankan Malay">Sri Lankan Malay</option>
                                    <option value="Burghers">Burghers</option>
                                    <option value="Indian Moor">Indian Moor</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('nationality')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="religion" class="form-label">Religion</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('religion') is-invalid @enderror"
                                    name="religion"
                                    id="religion"
                                >
                                    <option value="Buddhism">Buddhism</option>
                                    <option value="Hindus">Hindus</option>
                                    <option value="Muslims">Muslims</option>
                                    <option value="Christians">Christians</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('religion')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-4">
                            <label for="height" class="form-label">Height</label>
                            <input
                                type="text"
                                id="height"
                                name="height"
                                placeholder="Enter Height (Inches)"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Height (Inches)'"
                                class="single-input-secondary @error('height') is-invalid @enderror"
                                value="{{ Auth::user()->height }}"
                            >
                            @error('height')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="weight" class="form-label">Weight</label>
                            <input
                                type="text"
                                id="weight"
                                name="weight"
                                placeholder="Enter Weight (Kg)"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Weight (Kg)'"
                                class="single-input-secondary @error('weight') is-invalid @enderror"
                                value="{{ Auth::user()->weight }}"
                            >
                            @error('weight')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="mother_tongue" class="form-label">Mother Tongue</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('mother_tongue') is-invalid @enderror"
                                    name="mother_tongue"
                                    id="mother_tongue"
                                >
                                    <option value="Sinhala">Sinhala</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="English">English</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('mother_tongue')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-4">
                            <label for="horoscope" class="form-label">Horoscope</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('horoscope') is-invalid @enderror"
                                    name="horoscope"
                                    id="horoscope"
                                >
                                    <option value="Aries">Aries</option>
                                    <option value="Taurus">Taurus</option>
                                    <option value="Gemini">Gemini</option>
                                    <option value="Cancer">Cancer</option>
                                    <option value="Leo">Leo</option>
                                    <option value="Virgo">Virgo</option>
                                    <option value="Libra">Libra</option>
                                    <option value="Scorpio">Scorpio</option>
                                    <option value="Sagittarius">Sagittarius</option>
                                    <option value="Capricorn">Capricorn</option>
                                    <option value="Aquarius">Aquarius</option>
                                    <option value="Pisces">Pisces</option>
                                </select>
                                @error('horoscope')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="marital_status" class="form-label">Marital Status</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('marital_status') is-invalid @enderror"
                                    name="marital_status"
                                    id="marital_status"
                                >
                                    <option value="Unmarried">Unmarried</option>
                                    <option value="Unmarried">Married</option>
                                    <option value="Divorce">Divorced</option>
                                </select>
                                @error('marital_status')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="feature" class="form-label">Feature</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('feature') is-invalid @enderror"
                                    name="feature"
                                    id="feature"
                                >
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

                    <div class="form-group">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea
                            class="single-textarea "
                            placeholder="Type something about you..."
                            id="bio"
                            name="bio"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Type something about you...'"
                        ></textarea>
                        @error('bio')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="genric-btn purple radius" type="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
