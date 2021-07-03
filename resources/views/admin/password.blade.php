@extends('admin.layouts.dashboard')

@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Change Password</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Your Password</h4>
                        
                        @if(session()->has('success'))
                            <x-Alert type="success" :message="session()->get('success')"></x-Alert>
                        @endif

                        @include('admin.forms.password')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
