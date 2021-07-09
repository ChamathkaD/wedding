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
                    <i class="fad fa-briefcase mr-2"></i>
                    Jobs
                </h4>

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
                            class="single-input-secondary @error('job_title') is-invalid @enderror"
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
                                class="single-input-secondary @error('employment_type') is-invalid @enderror"
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
                            class="single-input-secondary @error('company') is-invalid @enderror"
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
                            class="single-input-secondary @error('location') is-invalid @enderror"
                        >
                        @error('location')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="current_role" name="current_role">
                            <label class="custom-control-label" for="current_role">I am currently working in this role</label>
                        </div>
                    </div>

                    <div class="form-row form-group">
                        <div class="col-sm-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('start_date') is-invalid @enderror"
                                    name="start_date"
                                    id="start_date"
                                >
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                @error('start_date')
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
                                    class="single-input-secondary @error('start_year') is-invalid @enderror"
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

                        <div class="col-sm-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('end_date') is-invalid @enderror"
                                    name="end_date"
                                    id="end_date"
                                >
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                @error('end_date')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label for="end_year" class="form-label">&nbsp;</label>
                            <div class="default-select" id="default-select">
                                <select
                                    class="single-input-secondary @error('end_year') is-invalid @enderror"
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

        <div class="row">
            <div class="col-sm-12 p-2">
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">Person</div>
                            <div class="serial">Name</div>
                            <div class="country">Occupation</div>
                            <div class="visit">Actions</div>
                        </div>
                        <div class="table-row">
                            <div class="serial">01</div>
                            <div class="serial">01</div>
                            <div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
