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
        <div class="row">

            <div class="col-sm-9 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-people-arrows mr-2"></i>
                    Social
                </h4>

                <form action="{{ route('account.social.save') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="whatsapp" class="form-label">Whatsapp</label>
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
                        @error('whatsapp')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror

                        <div class="py-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="whatsappPublic" name="whatsappPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="whatsappPublic">
                                    <i class="fal fa-globe ml-1"></i>
                                    Public
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="whatsappOnlyMe" name="whatsappPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="whatsappOnlyMe">
                                    <i class="fal fa-lock ml-1"></i>
                                    Only Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="facebook" class="form-label">Facebook URL</label>
                        <input
                            type="text"
                            id="facebook"
                            name="facebook"
                            placeholder="Enter Facebook URL"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Facebook URL'"
                            class="single-input-secondary @error('facebook') is-invalid @enderror"
                            value="{{ Auth::user()->facebook }}"
                        >
                        @error('facebook')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror

                        <div class="py-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="facebookPublic" name="facebookPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="facebookPublic">
                                    <i class="fal fa-globe ml-1"></i>
                                    Public
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="facebookOnlyMe" name="facebookPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="facebookOnlyMe">
                                    <i class="fal fa-lock ml-1"></i>
                                    Only Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="instagram" class="form-label">Instagram URL</label>
                        <input
                            type="text"
                            id="instagram"
                            name="instagram"
                            placeholder="Enter Instagram URL"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Instagram URL'"
                            class="single-input-secondary @error('instagram') is-invalid @enderror"
                            value="{{ Auth::user()->instagram }}"
                        >
                        @error('instagram')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror

                        <div class="py-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="instagramPublic" name="instagramPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="instagramPublic">
                                    <i class="fal fa-globe ml-1"></i>
                                    Public
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="instagramOnlyMe" name="instagramPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="instagramOnlyMe">
                                    <i class="fal fa-lock ml-1"></i>
                                    Only Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="linkedin" class="form-label">Linked In URL</label>
                        <input
                            type="text"
                            id="linkedin"
                            name="linkedin"
                            placeholder="Enter Linked In URL"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Linked In URL'"
                            class="single-input-secondary @error('linkedin') is-invalid @enderror"
                            value="{{ Auth::user()->linkedin }}"
                        >
                        @error('linkedin')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror

                        <div class="py-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="linkedinPublic" name="linkedinPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="linkedinPublic">
                                    <i class="fal fa-globe ml-1"></i>
                                    Public
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="linkedinOnlyMe" name="linkedinPrivacy" class="custom-control-input">
                                <label class="custom-control-label" for="linkedinOnlyMe">
                                    <i class="fal fa-lock ml-1"></i>
                                    Only Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="genric-btn purple radius" type="submit">Save</button>
                    </div>

                </form>

            </div>

            <div class="col-sm-3 p-2">

            </div>
        </div>
    </div>

@endsection
