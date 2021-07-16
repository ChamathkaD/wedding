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

        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="{{ asset('img/elements/g1.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g1.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/elements/g2.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g2.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/elements/g3.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g3.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ asset('img/elements/g4.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g4.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ asset('img/elements/g5.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g5.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/elements/g6.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g6.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/elements/g7.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g7.jpg') }});"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('img/elements/g8.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{ asset('img/elements/g8.jpg') }});"></div>
                </a>
            </div>
        </div>
    </div>

@endsection
