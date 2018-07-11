@extends('layouts.frontend.app')

@section('title', 'Login')

@push('css')
    <link href="{{ asset('assets/frontend/css/auth/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/auth/responsive.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="slider display-table center-text">
        <h1 class="title display-table-cell"><b>{{ __('LOGIN') }}</b></h1>
    </div><!-- slider -->

    <section class="blog-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-0"></div>
                <div class="col-lg-8 col-md-12">
                    <div class="post-wrapper">
                        {{ Form::open(['route' => 'login', 'aria-label' => __('Login')]) }}
                        <div class="form-group row">
                            {{ Form::label(
                                'email', __('E-Mail Address'),
                                ['class' => 'col-sm-4 col-form-label text-md-right'])
                            }}

                            <div class="col-md-6">
                                {{ Form::email('email', '', ['class' => 'form-control', 'autofocus']) }}

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
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        {{ Form::checkbox('remember', '') }} {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{ Form::button(__('Login'), ['class' => 'btn btn-primary', 'type' => 'submit']) }}

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
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
