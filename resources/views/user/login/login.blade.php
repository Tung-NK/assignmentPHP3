@extends('user.layout.default')

@section('home')
    <!-- login area start -->
    <center>
        <div class="login-register-area pt-5 pb-100px">
            <div class="container">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>login</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    @if (session('messageErr'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            {{ session('messageErr') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="login-register-form">
                                        <form action="{{ route('postLogin') }}" method="post">
                                            @csrf
                                            <input class="mb-3" type="email" name="email" id="email"
                                                placeholder="Email" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input class="mb-3" type="password" name="password" id="password"
                                                placeholder="Password" />
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" id="remember" name="remember">
                                                    <a class="flote-none" href="">Remember me</a>
                                                    <a href="{{route('forgotPass')}}">Forgot Password?</a>
                                                </div>
                                                <div class="login-toggle-btn">
                                                    <button type="submit"><span>Login</span></button>
                                                    <a class="ms-3" href="{{ route('register') }}">Register</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </center>
    <!-- login area end -->
@endsection
