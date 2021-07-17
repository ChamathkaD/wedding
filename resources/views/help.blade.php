@extends('layouts.app')

@section('content')
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2  hero-overly d-flex align-items-center" data-background="{{ asset('img/hero/about_hero.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Help Center</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col mt-5 mb-5">

                <div class="accordion" id="accordionExample">
                    <div class="card ">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Who we are?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Choose the right partner for you, regardless of your status, from our wedding proposals.Through Sri Lanka's premier and most reliable wedding service, we have made it possible for you to find a suitable partner for your daughter, son, brother, sister, friend, age, caste, religion, race, education, income level and many more.Do not Waste Your Valuable Time & Money on Matchmakers or News Paper Advertisements. Come, Join Us Now...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How to register?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    <div class="media-body">
                                        <h4>01.CREATE AN ACCOUNT</h4>
                                <p>Register for a new account filling the application provided in our website.(Registration fee: 500 LKR)</p>
                                <h4>02. LOG IN TO YOUR ACCOUNT</h4>
                                <p>Verify your account using your email address.</p>

                                <h4>03. GET YOUR ACCOUNT VERIFIED</h4>
                                <p>We will confirm your account within 48 hours after consideration of your information.</p>

                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    About Registration
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>When you register this site yourself or through a broker, you must payed 500LKR for registration.You can deposit your money through a Bank deposit, online banking, deposit machine or eZ Cash
                                    A snapshot of your bank slip or a screenshot of your online payment must be uploaded.</p>
                                <p>One account should be used by only one person. We are closely monitoring all changes of information in user profiles and strict actions will be taken when needed immediately for suspected accounts. We strongly advise against this as it may cause suspension or termination of your account under breaching our T&C.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   Who is a Broker
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>It is completely free to register as a broker.Your role as a broker is to register users on our website.If a person registers through a broker, the broker can profit from our website.You can earn more money from Chamara if you can register more users for our site.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  In the confidentiality
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    You do not show the phone number to anyone else without your knowledge and you can show the photo to other members if you wish.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
