@extends('layouts.app')

@push('css')

    <style>
        .user-img {
            width: 150px;
        }

        h5 {
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 0;
        }

        .account-items i {
            color: #a903c8 !important;
        }

    </style>

@endpush

@section('content')

    <div class="container account-items">
        <div class="row p-4" style="background-color: #f1f1f1">
            <div class="col-sm-12 d-flex justify-content-between">

                <div class="d-flex justify-content-around align-items-center">
                    <img src="{{ asset('img/team/person_1.jpg') }}" alt="" class="user-img rounded-circle">
                    <div class="ml-3">
                        <h3 class="font-weight-bold">{{ Auth::user()->full_name }}</h3>
                        <p class="mb-0">{{ Auth::user()->email }}</p>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="btn-link"
                        >Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="row p-4">
            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-user fa-3x"></i>
                <div class="ml-3">
                    <h5>Personal Information</h5>
                    <small class="text-dark">First Name, Birthday, Gender</small>
                </div>
            </a>

            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-address-card fa-3x"></i>
                <div class="ml-3">
                    <h5>Addresses</h5>
                    <small class="text-dark">Address 1, Address 2</small>
                </div>
            </a>

            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-users fa-3x"></i>
                <div class="ml-3">
                    <h5>Family Information</h5>
                    <small class="text-dark">Father, Mother</small>
                </div>
            </a>

            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-graduation-cap fa-3x"></i>
                <div class="ml-3">
                    <h5>Education</h5>
                    <small class="text-dark">O/L, A/L, School, University</small>
                </div>
            </a>
        </div>

        <div class="row p-4">
            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-image-polaroid fa-3x"></i>
                <div class="ml-3">
                    <h5>My Gallery</h5>
                    <small class="text-dark">Stories</small>
                </div>
            </a>

            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-lock fa-3x"></i>
                <div class="ml-3">
                    <h5>Privacy</h5>
                    <small class="text-dark">Change Password</small>
                </div>
            </a>

            <a href="#" class="col-sm-3 d-flex justify-content-start align-items-center">
                <i class="fad fa-gear fa-3x"></i>
                <div class="ml-3">
                    <h5>Other Settings</h5>
                    <small class="text-dark">Settings</small>
                </div>
            </a>
        </div>
    </div>

@endsection
