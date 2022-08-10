@extends('client.layout.master')
@section('main-content')
@section('content-title', 'Login')
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
        <div class="mb-4">
            <form method="post" action="{{ Route('auth.postLogin') }}" class="contact-form">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="CustomerEmail">Email</label>
                            <input type="email" name="email" placeholder="">
                        </div>
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="CustomerPassword">Password</label>
                            <input type="password" value="" name="password">
                        </div>
                        @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" class="btn mb-3" value="Sign In">
                        <p class="mb-4">
                            <a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;
                            <a href="{{ Route('auth.getRegister') }}" id="customer_register_link">Create account</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
