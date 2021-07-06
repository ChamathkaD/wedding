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

                <div class="d-flex justify-content-between align-items-baseline">
                    <h4 class="mb-40 heading-icon">
                        <i class="fad fa-users mr-2"></i>
                        Family Information
                    </h4>

                    <a href="#" class="genric-btn purple" data-toggle="modal" data-target="#createFamilyModal">Add Family Member</a>
                </div>

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

            <div class="col-sm-3 p-2">

            </div>
        </div>
    </div>

    <div class="modal fade" id="createFamilyModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="createFamilyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <h5 class="font-weight-bold">Add Family Member</h5>

                    <form action="" class="py-3">

                        <div class="form-group">
                            <label for="person" class="form-label">Person</label>
                            <input
                                type="text"
                                id="person"
                                name="person"
                                placeholder="Enter Person"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Person'"
                                class="single-input-secondary @error('person') is-invalid @enderror"
                                value="{{ Auth::user()->person }}"
                            >
                            @error('person')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input
                                type="text"
                                id="full_name"
                                name="full_name"
                                placeholder="Enter Full Name"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Full Name'"
                                class="single-input-secondary @error('full_name') is-invalid @enderror"
                                value="{{ Auth::user()->full_name }}"
                            >
                            @error('full_name')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input
                                type="text"
                                id="occupation"
                                name="occupation"
                                placeholder="Enter Occupation"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Occupation'"
                                class="single-input-secondary @error('occupation') is-invalid @enderror"
                                value="{{ Auth::user()->occupation }}"
                            >
                            @error('occupation')
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
