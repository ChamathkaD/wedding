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

            <div class="col-sm-12 p-4 d-inline-flex justify-content-start align-items-start">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-image-polaroid mr-2"></i>
                    Gallery
                </h4>

                @livewire('modal.account.gallery')

            </div>

        </div>

    </div>

@endsection
