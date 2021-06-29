@extends('admin.layouts.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-hover">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if(Auth::user()->image)
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{ asset('uploads/user/image/' . Auth::user()->image) }}"
                                     alt="{{ Auth::user()->image }}">
                            @endif
                        </div>

                        <h3 class="profile-username text-center">
                            {{ Auth::user()->name }}
                        </h3>

                        <p class="text-muted text-center">
                            {{ Auth::user()->email }}
                        </p>

                        <ul class="list-group list-group-unbordered mb-3">
                            {{--<li class="list-group-item">
                                <b>Last Login</b> <a class="float-right">
                                    {{ \App\Helpers\Helper::getFormattedDateObject(Auth::user()->last_login, 'datetime', false) }}
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Since at</b> <a class="float-right">
                                    {{ \App\Helpers\Helper::getFormattedDateObject(Auth::user()->created_at, 'datetime', false) }}
                                </a>
                            </li>--}}
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                            </li>
                        </ul>

                        {{--<a href="{{ route('show.password') }}" class="btn btn-primary btn-block"><b>Change Password</b></a>--}}
                    </div>

                </div>

            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body p-5">

                        {{--@if($errors->any())
                            <x-Alert type="danger" :message="$errors->first()"></x-Alert>
                        @endif

                        @if(session()->has('success'))
                            <x-Alert type="success" :message="session()->get('success')"></x-Alert>
                        @endif--}}

                        {{--@include('admin.forms.profile', [
                            "route" => route('profile.update'),
                            "user" => Auth::user(),
                            "btnText" => "Save Profile",
                            "cancelBtnRoute" => url('/'),
                        ])--}}

                        @include('admin.forms.profile')

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
