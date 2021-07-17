@extends('admin.layouts.dashboard')

@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Users</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>first_name</th>
                                    <th>last_name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>birthday</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                <tr>
                                    <td>{{$record->first_name}}</td>
                                    <td>{{$record->last_name}}</td>
                                    <td>{{$record->email}}</td>
                                    <td>{{$record->phone}}</td>
                                    <td>{{$record->birthday}}</td>
                                    <td>
                                        <a
                                            href="{{ route('admin.users.show', $record->id) }}"
                                            class="btn btn-primary btn-sm text-white"
                                        >
                                            <i class="mdi mdi-eye mdi-18px"></i>
                                        </a>
                                        <a
                                            href="{{ route('admin.users.destroy', $record->id) }}"
                                            class="btn btn-danger btn-sm text-white"
                                            onclick="return confirm('Do you want to delete {{ $record->full_name }}?')"
                                        >
                                            <i class="mdi mdi-delete mdi-18px"></i>
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
