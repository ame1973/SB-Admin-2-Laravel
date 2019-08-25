@extends ('layouts.panel')

@section('html_title','SB Admin 2 | Register')
@section('body_class', 'bg-gradient-primary')

@section ('body_main_content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0{{ $errors->has('name-first') ? ' has-error' : '' }}">
                                    <input type="text" name="name-first" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" required>
                                    @if ($errors->has('name-first'))
                                        <span class="form-text text-danger">
                                            <small>{{ $errors->first('name-first') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-6{{ $errors->has('name-last') ? ' has-error' : '' }}">
                                    <input type="text" name="name-last" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" required>
                                    @if ($errors->has('name-last'))
                                        <span class="form-text text-danger">
                                            <small>{{ $errors->first('name-last') }}</small>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" required>
                                @if ($errors->has('email'))
                                    <span class="form-text text-danger">
                                            <small>{{ $errors->first('email') }}</small>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="form-text text-danger">
                                            <small>{{ $errors->first('password') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password_confirmation" class="form-control form-control-user" id="password_confirmation" placeholder="Repeat Password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                            <a href="#" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="#" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
