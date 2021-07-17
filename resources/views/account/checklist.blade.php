@extends('layouts.app')

@push('css')

    <style>
        .single-input-secondary:focus, .single-textarea:focus {
            outline:none;border:1px solid #a903c8
        }

        h4 {
            margin-bottom: 0;
            color: #a903c8;
        }

        .heading-icon i {
            color: #a903c8 !important;
        }

        .confirm-switch{
            background: #c2c2c6;
        }

        .confirm-switch input:checked+label:before{
            background:#a903c8
        }
    </style>

@endpush

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-sm-8 p-4">

                <h4 class="mb-40 heading-icon">
                    <i class="fad fa-ballot-check mr-2"></i>
                    Checklist
                </h4>

                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                        </button>
                        <strong> <i class="fa fa-check"></i> {!! session()->get('success') !!}</strong></div>
                @endif

                <form action="{{ route('account.checklist.save') }}" method="POST">
                    @csrf
                    <table class="table table-borderless">
                        <tr>
                            <td>Drinking</td>
                            <td>
                                <div class="confirm-switch">
                                    <input
                                        type="checkbox"
                                        id="drinking"
                                        name="drinking"
                                        value="1"
                                        {{ Auth::user()->checklist->drinking ? 'checked' : '' }}
                                    >
                                    <label for="drinking"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Smoking</td>
                            <td>
                                <div class="confirm-switch">
                                    <input
                                        type="checkbox"
                                        id="smoking"
                                        name="smoking"
                                        value="1"
                                        {{ Auth::user()->checklist->smoking ? 'checked' : '' }}
                                    >
                                    <label for="smoking"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Clubbing</td>
                            <td>
                                <div class="confirm-switch">
                                    <input
                                        type="checkbox"
                                        id="clubbing"
                                        name="clubbing"
                                        value="1"
                                        {{ Auth::user()->checklist->clubbing ? 'checked' : '' }}
                                    >
                                    <label for="clubbing"></label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <button class="genric-btn purple radius" type="submit">Save</button>
                            </td>
                        </tr>
                    </table>

                </form>

            </div>

        </div>

    </div>

@endsection
