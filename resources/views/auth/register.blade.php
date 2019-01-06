@extends('auth.auth_layout')

@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" id="firstName" class="form-control" placeholder="First name"
                                       name="name" value="{{ old('name') }}" required autofocus>
                                <label for="firstName">First name</label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <input type="text" id="lastName" class="form-control" placeholder="Last name"
                                       name="lastname" value="{{ old('lastname') }}" required>
                                <label for="lastName">Last name</label>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                               name="email" value="{{ old('email') }}" required>
                        <label for="inputEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                       name="password" required>
                                <label for="inputPassword">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control"
                                       placeholder="Confirm password" name="password_confirmation" required>
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{url('/login')}}">Login Page</a>
                <a class="d-block small" href="/">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
@endsection


