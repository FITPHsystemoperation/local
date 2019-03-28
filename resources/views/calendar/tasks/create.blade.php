@extends ('shared.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Create New Task</p>

                <a class="delete" href="{{ route('tasks.index', $day->date) }}" aria-label="close"></a>
            </header><!-- modal-card-head -->

            <form method="post" @submit="submit" action="{{ route('tasks.store', $day->date) }}">
                @csrf

                <section class="modal-card-body">
                    <div class="field">
                        <label class="label">Date:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" class="input is-success" value="{{ $day->date }}" readonly>

                            <span class="icon is-small is-right">
                                <i class="fas fa-calendar-day"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="subject">Subject:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="subject" name="subject" placeholder="Subject"
                                class="input {{ $errors->has('subject') ? ' is-danger' : '' }}"
                                value="{{ old('subject') }}" autofocus required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-calendar-check"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('subject') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="description">Description:</label>
                    
                        <div class="control">
                            <textarea id="description" name="description" rows="3" placeholder="Description" class="textarea" required>{{ old('description') }}</textarea>
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('description') }}</p>
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

                    <my-link href="{{ route('tasks.index', $day->date) }}">Go Back</my-link>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection
