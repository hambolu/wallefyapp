@extends('layouts.auth')
@section('name')

<h3 class="text-center">Sign In</h3>
<form action="/login" method="post">
    @csrf
    <div class="login-form">
        <div class="form-group form-floating-label">
            <input id="email" name="email" type="text" class="form-control input-border-bottom" required>
            <label for="username" class="placeholder">Email</label>
        </div>
        <div class="form-group form-floating-label">
            <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
            <label for="password" class="placeholder">Password</label>
            <div class="show-password">
                <i class="flaticon-interface"></i>
            </div>
        </div>
        <div class="row form-sub m-0">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rememberme">
                <label class="custom-control-label" for="rememberme">Remember Me</label>
            </div>

            <a href="#" class="link float-right">Forget Password ?</a>
        </div>
        <div class="form-action mb-3">
            <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
        </div>
        <div class="login-account">
            <span class="msg">Don't have an account yet ?</span>
            <a href="/register" class="link">Sign Up</a>
        </div>
    </div>
</form>
</div>
@endsection


