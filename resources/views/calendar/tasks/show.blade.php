@extends ('shared.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>
        
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Schedule: {{ ucwords($task->subject) }}</p>
                <a class="delete" href="{{ route('calendar', [$day->month, $day->year]) }}" aria-label="close"></a>
            </header><!-- modal-card-head -->
    
            <section class="modal-card-body">
                <info attr="Date">{{ $task->date }}</info>
                <info attr="Subject">{{ $task->subject }}</info>
                <info attr="Description"></info>

                <div class="field">
                    <div class="control">
                        <textarea rows="3" class="textarea" readonly>{{ $task->description }}</textarea>
                    </div><!-- control -->
                </div><!-- field -->
            </section><!-- modal-card-body -->
            
            <footer class="modal-card-foot">
                <my-link href="{{ route('calendar', [$day->month, $day->year]) }}">Okay</my-link>
            </footer><!-- modal-card-foot -->
        </div><!-- modal-card -->
    </div><!-- modal -->
@endsection