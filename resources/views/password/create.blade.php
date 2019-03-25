@extends ('shared.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">New Password</p>
                <a class="delete" href="{{ route('passwords.index') }}" aria-label="close"></a>
            </header><!-- modal-card-head -->

            <form method="post" @submit="submit" action="{{ route('passwords.store') }}">
                @csrf

                <section class="modal-card-body">
                    <div class="field">
                        <label class="label" for="subject">Subject:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="subject" name="subject" placeholder="Subject"
                                class="input {{ $errors->has('subject') ? ' is-danger' : '' }}"
                                value="{{ old('subject') }}" autofocus required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-lock"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('subject') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="password">Password:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="password" name="password" placeholder="Password"
                                class="input {{ $errors->has('password') ? ' is-danger' : '' }}"
                                value="{{ old('password') }}" required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-key"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="desciption">Description:</label>
                    
                        <div class="control">
                            <textarea id="description" name="description" rows="3" placeholder="Type Description Here..." class="textarea">{{ old('description') }}</textarea>
                        </div><!-- control -->
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

                    <my-link href="{{ route('passwords.index') }}">Go Back</my-link>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection