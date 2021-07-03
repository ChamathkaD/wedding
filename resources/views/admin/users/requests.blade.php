@extends('admin.layouts.dashboard')

@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">New User Requests</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Requests</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @if(session()->has('success'))
                            <x-Alert type="success" :message="session()->get('success')"></x-Alert>
                        @endif

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($records as $record)
                                        <tr>
                                            <td>{{ $record->first_name }}</td>
                                            <td>{{ $record->last_name }}</td>
                                            <td>{{ $record->email }}</td>
                                            <td>{{ $record->birthday }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.users.requests.accept', $record->id) }}"
                                                    class="btn btn-success btn-sm text-white"
                                                    onclick="return confirm('Do you want to accept {{ $record->full_name }}?')"
                                                >
                                                    <i class="mdi mdi-check mdi-18px"></i>
                                                </a>
                                                <a
                                                    href="{{ route('admin.users.requests.reject', $record->id) }}"
                                                    class="btn btn-danger btn-sm text-white"
                                                    onclick="return confirm('Do you want to reject {{ $record->full_name }}?')"
                                                >
                                                    <i class="mdi mdi-close mdi-18px"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
