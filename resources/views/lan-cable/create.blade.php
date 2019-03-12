@extends ('shared.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">New LAN Cable</p>
                
                <a class="delete" href="{{ route('cables.index') }}" aria-label="close"></a>
            </header><!-- modal-card-head -->

            <form method="post" action="{{ route('cables.store') }}" @submit="submit">
                @csrf

                <section class="modal-card-body">
                    <div class="field">
                        <label class="label" for="name">Tag Name:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="name" name="name" placeholder="Tag Name"
                                class="input{{ $errors->has('name') ? ' is-danger' : ''}}"
                                value="{{ old('name') }}" required autofocus>
                            
                            <span class="icon is-small is-right">
                                <i class="fas fa-tag"></i>
                            </span><!-- icon -->
                        </div><!-- control -->

                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="description">Description:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="description" name="description" placeholder="Tag Description"
                                class="input{{ $errors->has('description') ? ' is-danger' : ''}}"
                                value="{{ old('description') }}" required>
                                
                            <span class="icon is-small is-right">
                                <i class="fas fa-question"></i>
                            </span><!-- icon -->
                        </div><!-- control -->

                        <p class="help is-danger">{{ $errors->first('description') }}</p>
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

                    <my-link href="{{ route('cables.index') }}">Cancel</my-link>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection