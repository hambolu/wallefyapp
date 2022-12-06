@extends('layouts.auth')
@section('content')

<h3 class="text-center">Sign Up</h3>
<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="login-form">
        <div class="form-group form-floating-label">
            <div class="form-group form-group-default">
                <label>Account Type</label>
                <select class="form-control" id="entity" name="entity" onchange="showDiv('hidden_div', this)">
                    <option value="INDIVIDUAL">Individual</option>
                    <option value="BUSINESS">Buisness</option>
                </select>
            </div>
        </div>
        <div class="form-group form-floating-label">
            <div class="form-group form-group-default">
                <label for="first_name" >First Name</label>
            <input  id="first_name" name="first_name" type="text" class="form-control " required>
            @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
            </div>
        </div>
        <div class="form-group form-floating-label">
            <div class="form-group form-group-default">
                <label for="last_name" >Last Name</label>
            <input  id="last_name" name="last_name" type="text" class="form-control " required>
            @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
            </div>
        </div>
        <div class="form-group form-floating-label">
            <div class="form-group form-group-default">
                <label for="email" >Email</label>
            <input  id="email" name="email" type="email" class="form-control " required>
            @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>
        </div>
        <div class="form-group form-floating-label">
            <div class="form-group form-group-default">
                <label for="password" >Password</label>
            <input  id="password" name="password" type="password" class="form-control " required>
            <div class="show-password">
                <i class="flaticon-interface"></i>
            </div>
            </div>
        </div>
        <div class="form-group form-floating-label">
            <div class="form-group form-group-default">
                <label for="passwordConfirmation" >Confirm Password</label>
            <input  id="passwordConfirmation" name="passwordConfirmation" type="password" class="form-control " required>
            <div class="show-password">
                <i class="flaticon-interface"></i>
            </div>
            </div>
        </div>
        <div class="row form-sub m-0">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
            </div>
        </div>
        <div class="form-action">
            <button type="submit" class="btn btn-success  btn-login">Sign Up</button>
        </div>
        <div class="login-account">
            <span class="msg">Already have an account ?</span>
            <a href="/" class="link">Sign In</a>
        </div>
    </div>
</form>
</div>
@endsection
