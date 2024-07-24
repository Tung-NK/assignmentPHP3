@extends('user.layout.default')

@section('home')
    <!-- login area start -->
    <center>
        <div class="login-register-area pt-5 pb-100px">
            <div class="container">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        @if (session('Err'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('Err') }}! <a class="text-black text-decoration-underline" href="{{route('login')}}">Đăng nhập ngay</a>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <form action="{{ route('postRegister') }}" method="post">
                                            @csrf
                                            <input type="text" name="name" placeholder="Username" />
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="password" name="password" placeholder="Password" />
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input name="email" placeholder="Email" type="email" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>

                                            <div class="button-box mt-3">
                                                <a href="{{ route('login') }}">Log in?</a>
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
