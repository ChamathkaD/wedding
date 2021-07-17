@extends('layouts.app')

@push('css')

    <style>
        .single-input-secondary:focus, .single-textarea:focus {
            outline:none;border:1px solid #a903c8
        }

        h4, h1 {
            margin-bottom: 0;
            color: #a903c8;
        }

        .heading-icon i {
            color: #a903c8 !important;
        }

        p, small, h5, h4 {
            margin-top: 0;
            margin-bottom: 0;
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
                        @livewire('modal.account.education.primary')
                    </div>

                    @foreach(Auth::user()->schools as $record)

                        <div class="d-flex justify-content-start py-1">
                            <h1 class="display-3 font-weight-normal">{{ sprintf('%02d', $loop->iteration) }}</h1>
                            <div class="ml-3 mt-4">
                                <h5>{{ $record->school }}</h5>
                                <p>{{ $record->from }} - {{ $record->to }}</p>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="py-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="font-weight-bold">Higher Education</h5>
                        @livewire('modal.account.education.higher')
                    </div>

                    @foreach(Auth::user()->universities as $record)

                        <div class="d-flex justify-content-start py-1 align-items-center">
                            <h1 class="display-3 font-weight-normal">{{ sprintf('%02d', $loop->iteration) }}</h1>
                            <div class="ml-3 mt-4">
                                <h5>{{ $record->university }}</h5>
                                <h6>{{ $record->degree }}</h6>
                                <p>{{ $record->field }}</p>
                                <p>{{ $record->from }} - {{ $record->to }}</p>
                                <small>{{ $record->description }}</small>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection
