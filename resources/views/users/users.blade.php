@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            @foreach(App\User::all() as $user)
            <div class="col-lg-4">
                <div class="card text-center mb-60 card-hover shadow-sm background ">
                    <div class="card-body " style="background: #fbf9ff">
                        <a href="{{ route('show.profile',$user->id) }}"><img src="{{ asset('img/users/'.$user->image) }}" alt="" class="rounded-circle"  width="150" height="150"></a>
                        <div class="media-body">
                            <a href="{{ route('show.profile',$user->id) }}">
                                <h4>{{ $user->firstName }} {{ $user->lastName }}</h4></a>



                            <p>{{$user->jobPost}} </p>

                        </div>

                        <div style="">
                            <ul class="list">
                                <li  style=" display: inline-block;
                    border: 1px solid #eeeeee;
                    background: #fff;
                    padding: 4px 20px;
                    margin-bottom: 8px;
                    margin-right: 3px;
                    transition: all 0.3s ease 0s;
                    color: #888888;
                    font-size: 13px;">
                                    <span>{{ $user->birthday }}</span>
                                </li>
                                <li  style="display: inline-block;
                    border: 1px solid #eeeeee;
                    background: #fff;
                    padding: 4px 20px;
                    margin-bottom: 8px;
                    margin-right: 3px;
                    transition: all 0.3s ease 0s;
                    color: #888888;
                    font-size: 13px;">
                                    <span>{{ $user->nationality }}</span>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>


  {{--  <div class="service-area ">
        <div class="container">

            <div class="row">
                @foreach(App\User::all() as $user)
                <div class="col-lg-4">
                    <div class="singl-services text-center mb-60">

                        <a href="{{ route('show.profile',$user->id) }}"><img src="{{ asset('img/users/'.$user->image) }}" alt="" class="rounded-circle"  width="150" height="150"></a>
                        <div class="blog-author">
                            <div class="media align-items-center">

                                <div class="media-body">
                                    <a href="{{ route('show.profile',$user->id) }}">
                                        <h4>{{ $user->firstName }} {{ $user->lastName }}</h4></a>
                                    <p>{{ $user->email }}</p>

                                    <div class="bottom-caption">
                                        <span>{{ $user->birthday }}</span>

                                    </div>
                                    <p>{{$user->jobPost}}<br>{{ $user->nationality }} </p>

                                </div>
                            </div>
                        </div>



                    </div>


                </div>
                @endforeach
               --}}{{-- <div class="col-lg-4">
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
                </div>--}}{{--
            </div>

        </div>
    </div>--}}


@endsection
