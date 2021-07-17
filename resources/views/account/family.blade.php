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

            <div class="col-sm-5 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-users mr-2"></i>
                    Family Information
                </h4>

                <h5 class="font-weight-bold">Add Family Member</h5>

                <form action="{{ route('account.family.save') }}" method="POST" class="py-3">

                    @csrf

                    <div class="form-group">
                        <label for="family_member" class="form-label">Family Member</label>
                        <div class="default-select" id="default-select">
                            <select
                                class="single-input-secondary @error('family_member') is-invalid @enderror"
                                name="family_member"
                                id="family_member"
                            >
                                <option disabled selected>Select a member</option>
                                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                <option value="Sister">Sister</option>
                                <option value="Brother">Brother</option>
                                <option value="Guardian">Guardian</option>
                            </select>
                            @error('family_member')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
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
                        >
                        @error('occupation')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="genric-btn purple radius" type="submit">Add Member</button>
                    </div>

                </form>

            </div>

            <div class="col-sm-7 p-2 d-flex align-items-center">
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">Person</div>
                            <div class="serial">Name</div>
                            <div class="country">Occupation</div>
                            <div class="visit">Occupation</div>
                        </div>

                        @foreach(\Illuminate\Support\Facades\Auth::user()->families as $family)
                        <div class="table-row">
                            <div class="serial">{{$family->family_member}}</div>
                            <div class="serial">{{$family->full_name}}</div>
                            <div class="country">{{$family->occupation}}</div>
                            <div class="visit">645032</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
