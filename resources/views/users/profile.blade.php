@extends('layouts.app')
@section('content')

    <div class="container mb-5">
        <div class="row">

                <div class="single-post-area">
                    <div class="blog-author">
                        <div class="media ">
                            <div class="col-4 align-items-center">
                            <div class="text-center">
                                <img src="{{asset('img/blog/author.png')}}" alt="">
                                <h3 class="mt-3">{{$user->firstName}} {{$user->middleName}} {{$user->lastName}} </h3>
                                <h5>{{$user->nicName}}</h5>
                            </div>
                                <p>{{ $user->jobPost }}</p>
                                <p>{{ $user->birthday }}</p>
                                <p>{{ $user->nationality }}</p>
                                <p>{{ $user->religion }}</p>
                                <p>{{ $user->city }}</p>


                                <div>
                                    <h5 class="mt-3">Contact</h5>

                                    <p><i class="fas fa-phone mr-3"></i>{{ $user->phone}}</p>
                                    <p><i class="fab fa-whatsapp mr-3"></i>{{ $user->whatsApp}}</p>
                                    <p><i class="far fa-envelope mr-3"></i>{{ $user->email}}</p>
                                    <p><i class="fab fa-facebook mr-3"></i>{{ $user->fb}}</p>
                                    <p><i class="fab fa-instagram mr-3"></i>{{ $user->ig}}</p>
                                    <p><i class="far fa-address-card mr-3"></i>{{ $user->addressLine1}},{{ $user->addressLine2}},{{ $user->addressLine3}}</p>
                                    <p><i class="fas fa-map-marker-alt mr-3"></i>{{ $user->city}}</p>
                                    <p><i class="fas fa-globe mr-3"></i>{{ $user->country}}</p>
                                </div>



                            </div>
                           <div class="col-8">
                               <div>
                                   <h5 >Personal Information</h5>
                                   <p>

                                   </p>
                                   <h5>Education Information</h5>
                                   <h5>Family Information</h5>


                                   <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                       our dominion twon Second divided from</p>
                                   <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                       our dominion twon Second divided from</p>
                               </div>
                           </div>
                        </div>
                    </div>

            </div>


        </div>
    </div>

@endsection
