@extends('shared.layout')

@section('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Reset Password</p>
                <a class="delete" href="{{ route('profile', Auth::user()->staff['firstName'] . Auth::user()->staff['lastName']) }}" aria-label="close"></a>
            </header><!-- modal-card-head -->
    
            <form method="POST" @submit="submit" action="{{ route('password.update') }}">
                @csrf

                <section class="modal-card-body">
                    <div class="field">
                        <label class="label" for="old_password">Old Password:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="old_password" name="old_password" placeholder="Old Password"
                                class="input {{ $errors->has('old_password') ? ' is-danger' : '' }}"
                                value="{{ old('old_password') }}" required autofocus>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-unlock"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('old_password') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="password">New Password:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="password" name="password" placeholder="New Password"
                                class="input {{ $errors->has('password') ? ' is-danger' : '' }}" required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-key"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="password_confirmation">Confirm Password:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                                class="input {{ $errors->has('password') ? ' is-danger' : '' }}" required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-key"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button class="button is-primary" :class="{ 'is-loading': isLoading }">Update</button>

                    <my-link href="{{ route('profile', Auth::user()->staff['firstName'] . Auth::user()->staff['lastName']) }}">Go Back</my-link>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection
