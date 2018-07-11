@extends('layouts.frontend.app')

@section('title', 'Register')

@push('css')
    <link href="{{ asset('assets/frontend/css/auth/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/auth/responsive.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="slider display-table center-text">
        <h1 class="title display-table-cell"><b>{{ __('REGISTER') }}</b></h1>
    </div><!-- slider -->

    <section class="blog-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-0"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="post-wrapper">
                        {{ Form::open(['route' => 'register', 'aria-label' => __('Register')]) }}
                        <div class="form-group row">
                            {{ Form::label(
                                'name', __('Name'),
                                ['class' => 'col-sm-4 col-form-label text-md-right'])
                            }}

                            <div class="col-md-6">
                                {{ Form::text('name', '', ['class' => 'form-control', 'autofocus']) }}

                                @if ($errors->has('name'))
                                    <span class="badge badge-warning" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label(
                                'email', __('E-Mail Address'),
                                ['class' => 'col-sm-4 col-form-label text-md-right'])
                            }}

                            <div class="col-md-6">
                                {{ Form::email('email', '', ['class' => 'form-control']) }}

                                @if ($errors->has('email'))
                                    <span class="badge badge-warning" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label(
                                'password', __('Password'),
                                ['class' => 'col-sm-4 col-form-label text-md-right'])
                            }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => 'form-control']) }}

                                @if ($errors->has('password'))
                                    <span class="badge badge-warning" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label(
                                'password-confirm', __('Confirm Password'),
                                ['class' => 'col-sm-4 col-form-label text-md-right'])
                            }}

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm']) }}

                                @if ($errors->has('password'))
                                    <span class="badge badge-warning" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::button(__('Register'), ['class' => 'btn btn-primary', 'type' => 'submit']) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div><!-- post-wrapper -->
                </div><!-- col-sm-8 col-sm-offset-2 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section -->
@endsection

@push('js')
    <script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
@endpush
