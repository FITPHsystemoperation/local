<div class="modal is-active">
    <div class="modal-background"></div>
    
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Update Work Related Data</p>
            <a class="delete" href="{{ route('staffs.show', $staff->id) }}" aria-label="close"></a>
        </header><!-- modal-card-head -->

        <form method="post" @submit="submit" action="{{ route('staffs.work.update', $staff->id) }}">
            @csrf
            @method ('patch')
            
            <section class="modal-card-body">
                <p class="subtitle has-text-centered has-text-weight-semibold">{{ "$staff->firstName $staff->lastName" }}</p>
                
                {{ $slot }}
            </section><!-- modal-card-body -->
            
            <footer class="modal-card-foot">
                <button class="button is-primary" :class="{ 'is-loading': isLoading }">
                    {{ $staff->isCompleted ? 'Save Record' : 'Go Next' }}
                </button>

                <my-link href="{{ route('staffs.show', $staff->id) }}">Go Back</my-link>
            </footer><!-- modal-card-foot -->
        </form>
    </div><!-- modal-card -->
</div><!-- modal -->