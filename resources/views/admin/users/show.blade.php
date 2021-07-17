@extends('admin.layouts.dashboard')

@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
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

                    <div class="d-flex flex-row comment-row p-3">
                        <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50"
                                              class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">James Anderson</h6>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                            <div class="comment-footer">
                                <span class="text-muted float-end">April 14, 2021</span>
                                <button type="button" class="btn btn-cyan btn-sm text-white">Edit</button>
                                <button type="button" class="btn btn-success btn-sm text-white">Publish</button>
                                <button type="button" class="btn btn-danger btn-sm text-white">Delete</button>
                            </div>
                        </div>
                    </div>

                    <ul class="list-style-none">
                        <li class="d-flex no-block card-body">
                            <i class="fa fa-check-circle w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Personal Information</h4>
                                <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">20</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-gift w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Location</h4>
                                <span class="text-muted">many many happy returns of the day</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">11</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-plus w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Family Information</h4>
                                <span class="text-muted">But already everything was solved. It will ...</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">19</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-leaf w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Education</h4>
                                <span class="text-muted">i am very happy to approved by TF</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">20</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-question-circle w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Jobs</h4>
                                <span class="text-muted">we glad that you choose our template</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">15</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-question-circle w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Gallery</h4>
                                <span class="text-muted">we glad that you choose our template</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">15</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-question-circle w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Social</h4>
                                <span class="text-muted">we glad that you choose our template</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">15</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-question-circle w-30px mt-1"></i>
                            <div>
                                <h4 class="mb-0 font-medium p-0">Checklist</h4>
                                <span class="text-muted">we glad that you choose our template</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">15</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
