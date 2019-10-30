@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4>{{ __('Create an account') }}</h4>
                </div>

                <div class="card-body position-relative">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="register-form-user">
                            <div class="form-group row">
                                <div class="col">
                                    <label for="firstname" class="">{{ __('First name') }}</label>
                                    <input id="firstname" placeholder="First name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="lastname" class="">{{ __('Last name') }}</label>
                                    <input id="lastname" placeholder="Last name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                <input id="email" placeholder="E-mail address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="form-group">
                                <a href="#" id="slide-next" class="btn btn-primary btn-block">
                                    {{ __('Next') }}
                                </a>
                            </div>
                        </div>

                        <div class="register-form-company" style="display: none;">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="country">Country</label>
                                    <select name="country" id="country" class="form-control">
                                        <option value="nl_NL" selected>Choose...</option>
                                        <option value="nl_NL">The Netherlands</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="city">City</label>
                                    <input type="text" id="city" class="form-control" placeholder="City">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="state">State/Province</label>
                                    <select name="state" id="state" class="form-control">
                                        <option value="nl_NL" selected>Choose...</option>
                                        <option value="nl_NL">Groningen</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="postalcode">Postal code</label>
                                    <input type="text" id="postalcode" class="form-control" placeholder="Postal code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phonenumber">Phonenumber</label>
                                <input type="text" id="phonenumber" class="form-control" placeholder="Phonenumber">
                            </div>

                            <div class="col-auto p-0">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">I accept the <a href="">Terms of use</a> & <a href="">Privacy Policy</a> </label>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col">
                                    <a href="#" id="slide-prev" class="btn btn-light-main btn-block">{{ __('Go back') }}</a>
                                </div>
                                <div class="col">
                                    <button type="submit" id="slide-next" class="btn btn-primary btn-block">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
