@extends('layouts.app')
@section('content')

    <div class="service-area ">
        <div class="container">

            <div class="row">
                @foreach(App\User::all() as $user)
                <div class="col-lg-4">
                    <div class="singl-services text-center mb-60">
                        <div class="top-caption">
                            <h4>{{ $user->firstName }}</h4>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div class="services-img">
                            <img src="{{ asset('img/users/'.$user->image) }}" alt=""  class="rounded-circle"  width="245" height="245">
                            <div class="back-flower">
                                <img src="{{ asset('img/service/services_flower1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="bottom-caption">
                            <span>{{ $user->birthday }}</span>
                            <p>{{$user->jobPost}}<br>{{ $user->nationality }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
               {{-- <div class="col-lg-4">
                    <div class="singl-services text-center mb-60">
                        <div class="top-caption">
                            <h4>The Ceremony</h4>
                            <p>July 20, 2020</p>
                        </div>
                        <div class="services-img">
                            <img src="assets/img/service/service2.png" alt="">
                            <div class="back-flower">
                                <img src="assets/img/service/services_flower1.png" alt="">
                            </div>
                        </div>
                        <div class="bottom-caption">
                            <span>12:00PM-2:00PM</span>
                            <p>The Sierra Resort 14<br> Pacific Grove Monterey, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singl-services text-center mb-60">
                        <div class="top-caption">
                            <h4>Afterparty</h4>
                            <p>July 20, 2020</p>
                        </div>
                        <div class="services-img">
                            <img src="assets/img/service/service3.png" alt="">
                            <div class="back-flower">
                                <img src="assets/img/service/services_flower1.png" alt="">
                            </div>
                        </div>
                        <div class="bottom-caption">
                            <span>12:00PM-2:00PM</span>
                            <p>The Sierra Resort 14<br> Pacific Grove Monterey, CA</p>
                        </div>
                    </div>
                </div>--}}
            </div>

        </div>
    </div>

@endsection
