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
                    <i class="fad fa-graduation-cap mr-2"></i>
                    Education
                </h4>

                <div class="py-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="font-weight-bold">Primary Education</h5>
                        <a href="#" class="genric-btn purple small" data-toggle="modal" data-target="#createSchoolModal">Add School</a>
                    </div>

                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="serial">Person</div>
                                <div class="serial">Name</div>
                                <div class="country">Job</div>
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

                <div class="py-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="font-weight-bold">Higher Education</h5>
                        <a href="#" class="genric-btn purple small">Add University</a>
                    </div>

                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="serial">Person</div>
                                <div class="serial">Name</div>
                                <div class="country">Job</div>
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

                <div class="py-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h5 class="font-weight-bold">Education Qualifications</h5>
                        <a href="#" class="genric-btn purple small">Add Qualification</a>
                    </div>

                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="serial">Person</div>
                                <div class="serial">Name</div>
                                <div class="country">Job</div>
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

            <div class="col-sm-3 p-2">

            </div>
        </div>
    </div>

    <div class="modal fade" id="createSchoolModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="createSchoolModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <h5 class="font-weight-bold">Add School</h5>

                    <form action="" class="py-3">

                        <div class="form-group">
                            <label for="school" class="form-label">School</label>
                            <input
                                type="text"
                                id="school"
                                name="school"
                                placeholder="Enter School"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter School'"
                                class="single-input-secondary @error('school') is-invalid @enderror"
                                value="{{ Auth::user()->school }}"
                            >
                            @error('school')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="from" class="form-label">From</label>
                            <input
                                type="text"
                                id="from"
                                name="from"
                                placeholder="From"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter From'"
                                class="single-input-secondary @error('from') is-invalid @enderror"
                                value="{{ Auth::user()->from }}"
                            >
                            @error('from')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="from" class="form-label">To</label>
                            <input
                                type="text"
                                id="from"
                                name="from"
                                placeholder="To"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter To'"
                                class="single-input-secondary @error('from') is-invalid @enderror"
                                value="{{ Auth::user()->from }}"
                            >
                            @error('from')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="genric-btn purple" data-dismiss="modal">Close</button>
                    <button type="button" class="genric-btn purple">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createSchoolModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="createSchoolModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <h5 class="font-weight-bold">Add School</h5>

                    <form action="" class="py-3">

                        <div class="form-group">
                            <label for="school" class="form-label">School</label>
                            <input
                                type="text"
                                id="school"
                                name="school"
                                placeholder="Enter School"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter School'"
                                class="single-input-secondary @error('school') is-invalid @enderror"
                                value="{{ Auth::user()->school }}"
                            >
                            @error('school')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="from" class="form-label">From</label>
                            <input
                                type="text"
                                id="from"
                                name="from"
                                placeholder="From"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter From'"
                                class="single-input-secondary @error('from') is-invalid @enderror"
                                value="{{ Auth::user()->from }}"
                            >
                            @error('from')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="from" class="form-label">To</label>
                            <input
                                type="text"
                                id="from"
                                name="from"
                                placeholder="To"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter To'"
                                class="single-input-secondary @error('from') is-invalid @enderror"
                                value="{{ Auth::user()->from }}"
                            >
                            @error('from')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="genric-btn purple" data-dismiss="modal">Close</button>
                    <button type="button" class="genric-btn purple">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection
