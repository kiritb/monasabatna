@include('header')

<!------- body start-------->

<div class="container-fluid">
    <div class="row bg-custsignin">

        <div class="main_custsignin">

            <div class="col-md-4 col-sm-4 col-xs-4 form_custsignin">
                <form class="form-horizontal" id="sign_in_form" enctype="multipart/form-data" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label formcust-head">User Sign In:</label>
                        </div>
                    </div>
                    <div class="form-group signin-custom">
                        <div class="col-sm-12">
                            <label class="control-label" for="phone">{{ __('Phone
                                Number') }}</label>

                            <input type="text" id="phone" class="form-control csignin{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                placeholder="" name="phone" value="{{ old('phone') }}" required autofocus>

                            @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-sm-12">
                            <label for="password" class="control-label">{{ __('Password')
                                }}</label>

                            <input id="password" type="password" class="form-control csignin{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-sm-12">
                            <label class="control-label small-custforgot" for="personname">
                                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your
                                    Password?') }}</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block signinlink">{{ __('Sign In')
                                }}</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="control-label signup-link" for="personname">
                                <span class="small-cust">New User?
                                    <a href="{{ url('/') }}/register"> Sign Up</a>
                                </span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-8 img_custsignin">
                <img src="svg/images/cust-signin.jpg" class="img-responsive">
            </div>

        </div>
        <!----------- row -------------->

    </div>
</div>
<!---------- row bg-custsignin ------------>

<!------- body end-------->
@include('footer')
