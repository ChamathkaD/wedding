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
                    <i class="fad fa-lock mr-2"></i>
                    Change Password
                </h4>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                @endif

                <form action="{{ route('account.password.update') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input
                            type="password"
                            id="current_password"
                            name="current_password"
                            placeholder="Enter Current Password"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Current Password'"
                            class="single-input-secondary form-control @error('current_password') is-invalid @enderror"
                        >
                        @error('current_password')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">New Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter New Password"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter New Password'"
                            class="single-input-secondary form-control @error('password') is-invalid @enderror"
                        >
                        @error('password')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Re enter your new password"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Re enter your new password'"
                            class="single-input-secondary form-control @error('password_confirmation') is-invalid @enderror"
                        >
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="genric-btn purple radius" type="submit">Change Password</button>
                    </div>

                </form>
            </div>

            <div class="col-sm-3 p-2">

            </div>
        </div>
    </div>

@endsection
