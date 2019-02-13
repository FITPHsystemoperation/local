@extends('shared.master')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-dark">
                    <h5 class="card-header">{{ __('Reset Password') }}</h5>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <div class="form-group row">{{-- old password --}}
                                <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" required autofocus>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>{{-- col --}}
                            </div>{{-- row --}}

                            <hr>

                            <div class="form-group row">{{-- password --}}
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>{{-- col --}}
                            </div>{{-- row --}}

                            <div class="form-group row">{{-- confirm --}}
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>{{-- col --}}
                            </div>{{-- row --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                                </div>{{-- col --}}
                            </div>{{-- row --}}
                        </form>
                    </div>{{-- card-body --}}
                </div>{{-- card --}}
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
@endsection
