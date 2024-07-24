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
                                <h4>Forgot Password</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div class="login-form-container">
                                @if (session('messageErr'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ session('messageErr') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="login-register-form">
                                    <form action="{{ route('forgotPassPost') }}" method="post">
                                        @csrf
                                        <input class="mb-3" type="email" name="email" id="email"
                                            placeholder="Email" />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="button-box">
                                            <button type="submit"><span>Send</span></button>
                                        </div>
                                    </form>
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
