@extends('user/layouts/master1')
@section('title','All Post - Index')
@section('content')
<div class="form-wrapper">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
        <div class="form-container--center">
            <div class="form-logo"> <a href=""><img src="{{asset('layout_user/img/logo.fbfe575.svg')}}" alt="logo"></a></div>
            <div class="form-title text-center mt-5 mb-5">
                <h3>Login to Viblo</h3>
            </div>
            <form class="mt-4" action="{{URL::asset('user/checkLogin') }}" method="post">
                @csrf
                <div class="input-group mb-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" placeholder="User name or email">
                </div>
                <div class="input-group mb-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" placeholder="Password">
                </div>
                <button id="login-btn"type="submit" class="btn btn-primary btn-md btn-block">Login</button>
            </form>
         
            <div class="d-flex justify-content-between mt-3 mb-3">
                <a href="">Forgot your password?</a>
                <a href="">Create account</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                <hr class="flex-fill m-0">
                <span class="ml-3 mr-3">Or login with</span>
                <hr class="flex-fill m-0">
            </div>
            <div class="form-social d-flex justify-content-between">
                <button class="el-button social-login__button facebook el-button--default el-button--medium">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </button>
                <button class="el-button social-login__button facebook el-button--default el-button--medium">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </button>
                <button class="el-button social-login__button facebook el-button--default el-button--medium">
                    <i class="fab fa-github"></i>
                    <span>Github</span>
                </button>
            </div>
        </div>
    </div>
@endsection