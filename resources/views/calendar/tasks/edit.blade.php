@extends ('shared.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Update Record</p>
                <a class="delete" href="{{ route('tasks.index', $task->date) }}" aria-label="close"></a>
            </header><!-- modal-card-head -->

            <form method="post" @submit="submit" action="{{ route('tasks.update', [$task->date, $task->id]) }}">
                @csrf
                @method ('patch')

                <section class="modal-card-body">
                    <div class="field">
                        <label class="label" for="date">Date:</label>
                    
                        <div class="control has-icons-right">
                            <input type="date" id="date" name="date"
                                class="input {{ $errors->has('date') ? ' is-danger' : '' }}"
                                value="{{ $task->date }}" autofocus required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-calendar-day"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('date') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="subject">Subject:</label>
                    
                        <div class="control has-icons-right">
                            <input type="text" id="subject" name="subject" placeholder="Subject"
                                class="input {{ $errors->has('subject') ? ' is-danger' : '' }}"
                                value="{{ $task->subject }}" required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas fa-calendar-check"></i>
                            </span><!-- icon -->
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('subject') }}</p>
                    </div><!-- field -->

                    <div class="field">
                        <label class="label" for="description">Description:</label>
                    
                        <div class="control">
                            <textarea id="description" name="description" rows="3" placeholder="Description" class="textarea" required>{{ $task->description }}</textarea>
                        </div><!-- control -->
                    
                        <p class="help is-danger">{{ $errors->first('description') }}</p>
                    </div><!-- field -->
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-primary" :class="{ 'is-loading': isLoading }">Save Record</button>

                    <button class="button is-danger" :class="{ 'is-loading': isLoading }" @click="submit"
                        onclick="event.preventDefault(); document.getElementById('delete_form').submit();">
                        Delete Record
                    </button>

                    <my-link href="{{ route('tasks.index', $task->date) }}">Go Back</my-link>
                </footer><!-- modal-card-foot -->
            </form>
        </div><!-- modal-card -->

        <form id="delete_form" method="post"
            action="{{ route('tasks.destroy', [$task->date, $task->id]) }}">
            @csrf
            @method ('delete')
        </form>
    </div><!-- modal -->
@endsection