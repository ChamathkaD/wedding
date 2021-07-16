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

            <div class="col-sm-8 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-gear mr-2"></i>
                    Settings
                </h4>

                <form action="{{ route('account.settings.save') }}" method="POST" class="py-3">

                    @csrf

                    <div class="form-group">
                        <label for="language" class="form-label">Language</label>
                        <div class="default-select" id="default-select">
                            <select
                                class="single-input-secondary @error('language') is-invalid @enderror"
                                name="language"
                                id="language"
                            >
                                <option disabled selected>Select a Language</option>
                                <option value="en">English</option>
                                <option value="si">සිංහල</option>
                            </select>
                            @error('language')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="genric-btn purple radius" type="submit">Save</button>
                    </div>

                </form>

            </div>

        </div>
    </div>

@endsection
