@extends('layouts.app')

@push('css')

    <style>
        .single-input-secondary:focus, .single-textarea:focus {
            outline:none;border:1px solid #a903c8
        }

        h4 {
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
                    <i class="fad fa-location-circle mr-2"></i>
                    Locations
                </h4>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                @endif

                <form action="{{ route('account.location.save') }}" method="POST">

                    @csrf

                    <h5 class="font-weight-bold">Home Address (Required)</h5>

                    <div class="form-group">
                        <label for="address_line1" class="form-label">Address Line 1</label>
                        <input
                            type="text"
                            id="address_line1"
                            name="address_line1"
                            placeholder="Enter Address Line 1"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Address Line 1'"
                            class="single-input-secondary @error('address_line1') is-invalid @enderror"
                            value="{{ isset(Auth::user()->location->address_line1) ? Auth::user()->location->address_line1 : '' }}"
                        >
                        @error('address_line1')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address_line2" class="form-label">Address Line 2</label>
                        <input
                            type="text"
                            id="address_line2"
                            name="address_line2"
                            placeholder="Enter Address Line 2"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Address Line 2'"
                            class="single-input-secondary @error('address_line2') is-invalid @enderror"
                            value="{{ isset(Auth::user()->location->address_line2) ? Auth::user()->location->address_line2 : '' }}"
                        >
                        @error('address_line2')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-4">
                            <label for="city" class="form-label">City</label>
                            <input
                                type="text"
                                id="city"
                                name="city"
                                placeholder="Enter City"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter City'"
                                class="single-input-secondary @error('city') is-invalid @enderror"
                                value="{{ isset(Auth::user()->location->city) ? Auth::user()->location->city : '' }}"
                            >
                            @error('city')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="district" class="form-label">District</label>
                            <input
                                type="text"
                                id="district"
                                name="district"
                                placeholder="Enter District"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter District'"
                                class="single-input-secondary @error('district') is-invalid @enderror"
                                value="{{ isset(Auth::user()->location->district) ? Auth::user()->location->district : '' }}"
                            >
                            @error('district')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="zip" class="form-label">Zip Code (Postal Code)</label>
                            <input
                                type="text"
                                id="zip"
                                name="zip"
                                placeholder="Enter Zip Code (Postal Code)"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Zip Code (Postal Code)'"
                                class="single-input-secondary @error('zip') is-invalid @enderror"
                                value="{{ isset(Auth::user()->location->zip) ? Auth::user()->location->zip : '' }}"
                            >
                            @error('zip')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <h5 class="font-weight-bold">Other Information</h5>

                    <div class="form-row form-group">
                        <div class="col-sm-4">
                            <label for="home_town" class="form-label">Home Town</label>
                            <input
                                type="text"
                                id="home_town"
                                name="home_town"
                                placeholder="Enter Home Town"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Home Town'"
                                class="single-input-secondary @error('home_town') is-invalid @enderror"
                                value="{{ isset(Auth::user()->location->home_town) ? Auth::user()->location->home_town : '' }}"
                            >
                            @error('home_town')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="birth_country" class="form-label">Country of Birth</label>
                            <input
                                type="text"
                                id="birth_country"
                                name="birth_country"
                                placeholder="Enter Country of Birth"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Country of Birth'"
                                class="single-input-secondary @error('birth_country') is-invalid @enderror"
                                value="{{ isset(Auth::user()->location->birth_country) ? Auth::user()->location->birth_country : '' }}"
                            >
                            @error('birth_country')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label for="current_city" class="form-label">Current City</label>
                            <input
                                type="text"
                                id="current_city"
                                name="current_city"
                                placeholder="Enter Current City"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Current City'"
                                class="single-input-secondary @error('current_city') is-invalid @enderror"
                                value="{{ isset(Auth::user()->location->current_city) ? Auth::user()->location->current_city : '' }}"
                            >
                            @error('current_city')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="current_country" class="form-label">Current Country</label>
                        <input
                            type="text"
                            id="current_country"
                            name="current_country"
                            placeholder="Enter Current Country"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Current Country'"
                            class="single-input-secondary @error('current_country') is-invalid @enderror"
                            value="{{ isset(Auth::user()->location->current_country) ? Auth::user()->location->current_country : '' }}"
                        >
                        @error('current_country')
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
