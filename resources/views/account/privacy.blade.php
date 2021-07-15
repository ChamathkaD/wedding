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

            <div class="col-sm-12 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-lock mr-2"></i>
                    Privacy & Security
                </h4>

                <div class="list-group">
                    <a href="{{ route('account.show.change.password') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">Change My Password</h5>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small>And some small print.</small>
                    </a>
                </div>

            </div>

        </div>
    </div>

@endsection
