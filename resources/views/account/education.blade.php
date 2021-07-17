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

        p, small, h5, h4, h6 {
            margin-top: 0;
            margin-bottom: 0;
            line-height: 20px;
        }
    </style>

@endpush

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-sm-9 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-graduation-cap mr-2"></i>
                    Education
                </h4>

                <div class="py-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="font-weight-bold">Primary Education</h5>

                        <a href="#" class="genric-btn purple small" data-toggle="modal" data-target="#modalSchoolForm">Add School</a>
                    </div>

                    @livewire('modal.account.education.primary')

                </div>

                <div class="py-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="font-weight-bold">Higher Education</h5>

                        <a href="#" class="genric-btn purple small" data-toggle="modal" data-target="#modalUniversityForm">Add University / Institute</a>
                    </div>

                    @livewire('modal.account.education.higher')
                </div>

            </div>
        </div>
    </div>

@endsection
