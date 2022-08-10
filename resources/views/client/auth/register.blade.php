@extends('client.layout.master')
@section('main-content')
@section('content-title', 'Register')
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
        <div class="mb-4">
            <form method="post" action="{{ Route('auth.postRegister') }}" class="contact-form">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="LastName">Full Name</label>
                            <input type="text" name="name" placeholder="" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="LastName">Username</label>
                            <input type="text" name="username" placeholder="" value="{{ old('username') }}">
                        </div>
                        @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="LastName">Phone Number</label>
                            <input type="text" name="phone" placeholder="" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="LastName">Address</label>
                            <input type="text" name="address" placeholder="" value="{{ old('address') }}">
                        </div>
                        @error('address')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="CustomerEmail">Email</label>
                            <input type="text" name="email" placeholder="" class=""
                                value="{{ old('email') }}">
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
                            <input type="password" value="" name="password" value="{{ old('password') }}">
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
                        <input type="submit" class="btn mb-3" value="Sign Up">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
