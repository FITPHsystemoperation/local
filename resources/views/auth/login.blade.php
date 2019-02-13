@extends('shared.master')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-dark">
                    <h5 class="card-header">{{ __('Login') }}</h5>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">{{-- idNumber --}}
                                <label for="idNumber" class="col-md-4 col-form-label text-md-right">{{ __('I.D. Number') }}</label>

                                <div class="col-md-6">
                                    <input id="idNumber" type="text" class="form-control{{ $errors->has('idNumber') ? ' is-invalid' : '' }}" name="idNumber" value="{{ old('idNumber') }}" required autofocus>

                                    @if ($errors->has('idNumber'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('idNumber') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">{{-- password --}}
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">{{-- remember --}}
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>{{-- card-body --}}
                </div>{{-- card --}}
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
@endsection
