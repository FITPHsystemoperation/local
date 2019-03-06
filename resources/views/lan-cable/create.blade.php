@extends ('shared.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">New LAN Cable</p>
                
                <a class="delete" href="{{ route('cables.index') }}" aria-label="close"></a>
            </header><!-- modal-card-head -->

            <form method="post" action="{{ route('cables.store') }}">
                @csrf

                <section class="modal-card-body">
                    @if ( $errors->hasAny() )
                        <div class="notification is-danger">
                            @foreach ($errors->all() as $error)
                                <p class="has-text-centered">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="field">
                        <label class="label" for="name">Tag Name:</label>
                    
                        <div class="control has-icons-right">
                            <input class="input" type="text" id="name" name="name" placeholder="Tag Name" required autofocus>
                            
                            <span class="icon is-small is-right">
                                <i class="fas fa-tag"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="description">Description:</label>
                    
                        <div class="control has-icons-right">
                            <input class="input" type="text" id="description" name="description" placeholder="Tag Description" required>
                                
                            <span class="icon is-small is-right">
                                <i class="fas fa-question"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-primary">Submit</button>

                    <a class="button" href="{{ route('cables.index') }}">Cancel</a>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection