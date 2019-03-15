@extends('shared.layout')

@section('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Login</p>
                <a class="delete" href="{{ route('home') }}" aria-label="close"></a>
            </header><!-- modal-card-head -->
    
            <form method="POST" @submit="submit" action="{{ route('login') }}">
                @csrf

                <section class="modal-card-body">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label" for="idNumber">I.D. No.:</label>
                        </div><!-- field-label -->
                    
                        <div class="field-body">
                            <div class="field">
                                <div class="control has-icons-right">
                                    <input type="text" id="idNumber" name="idNumber" placeholder="I.D. Number."
                                        class="input {{ $errors->has('idNumber') ? ' is-danger' : '' }}"
                                        value="{{ old('idNumber') }}" required autofocus>
                    
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-user"></i>
                                    </span><!-- icon -->
                                </div><!-- control -->
                    
                                <p class="help is-danger">{{ $errors->first('idNumber') }}</p>
                            </div><!-- field -->
                        </div><!-- field-body -->
                    </div><!-- field -->

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label" for="password">Password:</label>
                        </div><!-- field-label -->
                    
                        <div class="field-body">
                            <div class="field">
                                <div class="control has-icons-right">
                                    <input type="password" id="password" name="password" placeholder="Password"
                                        class="input {{ $errors->all() ? ' is-danger' : '' }}"
                                        value="{{ old('password') }}" required>
                    
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-lock"></i>
                                    </span><!-- icon -->
                                </div><!-- control -->
                    
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            </div><!-- field -->
                        </div><!-- field-body -->
                    </div><!-- field -->

                    <div class="field is-horizontal">
                        <div class="field-label is-normal"></div><!-- field-label -->
                    
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div><!-- control -->
                            </div><!-- field -->
                        </div><!-- field-body -->
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Log In</button>

                    <my-link href="{{ route('home') }}">Go Home</my-link>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection
