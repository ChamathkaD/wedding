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

        p, h5 {
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
                    <i class="fad fa-briefcase mr-2"></i>
                    Jobs
                </h4>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                @endif

                <h5 class="font-weight-bold">Add Job / Experience</h5>

                <form action="{{ route('account.job.save') }}" method="POST" class="py-3">

                    @csrf

                    <div class="form-group">
                        <label for="job_title" class="form-label">Job Title</label>
                        <input
                            type="text"
                            id="job_title"
                            name="job_title"
                            placeholder="Enter Job Title"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Job Title'"
                            class="single-input-secondary form-control @error('job_title') is-invalid @enderror"
                        >
                        @error('job_title')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="employment_type" class="form-label">Employment Type</label>
                        <div class="default-select" id="default-select">
                            <select
                                class="single-input-secondary form-control @error('employment_type') is-invalid @enderror"
                                name="employment_type"
                                id="employment_type"
                            >
                                <option disabled selected>Select a Type</option>
                                <option value="Full-Time">Full Time</option>
                                <option value="Part-Time">Part Time</option>
                                <option value="Self-Employed">Self-Employed</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                                <option value="Apprenticeship">Apprenticeship</option>
                                <option value="Seasonal">Seasonal</option>
                            </select>
                            @error('employment_type')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="company" class="form-label">Company</label>
                        <input
                            type="text"
                            id="company"
                            name="company"
                            placeholder="Enter Company"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Company'"
                            class="single-input-secondary form-control @error('company') is-invalid @enderror"
                        >
                        @error('company')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location" class="form-label">Location</label>
                        <input
                            type="text"
                            id="location"
                            name="location"
                            placeholder="Enter Location"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter Location'"
                            class="single-input-secondary form-control @error('location') is-invalid @enderror"
                        >
                        @error('location')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="current_role" name="current_role" value="1">
                            <label class="custom-control-label" for="current_role">I am currently working in this role</label>
                        </div>
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-3">
                            <label for="start_month" class="form-label">Start Date</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary form-control @error('start_month') is-invalid @enderror"
                                    name="start_month"
                                    id="start_month"
                                >
                                    <option value="">Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                @error('start_month')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label for="start_year" class="form-label">&nbsp;</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary form-control @error('start_year') is-invalid @enderror"
                                    name="start_year"
                                    id="start_year"
                                >
                                    <option value="">Year</option>
                                    @for($i = Carbon\Carbon::now()->format('Y'); $i >= Carbon\Carbon::now()->format('Y') - 60; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor

                                </select>
                                @error('start_year')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3 end_date">
                            <label for="end_month" class="form-label">End Date</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary form-control @error('end_month') is-invalid @enderror"
                                    name="end_month"
                                    id="end_month"
                                >
                                    <option value="">Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                @error('end_month')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3 end_date">
                            <label for="end_year" class="form-label">&nbsp;</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary form-control @error('end_year') is-invalid @enderror"
                                    name="end_year"
                                    id="end_year"
                                >
                                    <option value="">Year</option>
                                    @for($i = Carbon\Carbon::now()->format('Y'); $i >= Carbon\Carbon::now()->format('Y') - 60; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor

                                </select>
                                @error('end_year')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="genric-btn purple radius" type="submit">Add Job</button>
                    </div>

                </form>

            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-sm-9 p-2">

                @foreach(Auth::user()->experiences as $record)

                    <div class="d-flex justify-content-start py-1 align-items-center">
                        <h1 class="display-3 font-weight-normal">{{ sprintf('%02d', $loop->iteration) }}</h1>
                        <div class="ml-3 mt-4">
                            <h4>{{ $record->job_title }}</h4>
                            <h5>{{ $record->employment_type }}</h5>
                            <p class="text-primary">{{ $record->company }}</p>
                            <p>{{ $record->location }}</p>
                            <small>{{ $record->start_year . " " . $record->start_month }} - {{ isset($record->current_role) && $record->current_role == true ? 'current' : $record->end_year . " " . $record->end_month }}</small>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>

        $(document).ready(function() {

            $("#current_role").click(function () {
                if ($(this).is(":checked")) {
                    $(".end_date").hide();
                } else {
                    $(".end_date").show();
                }
            });

        });

    </script>

@endpush
