<article class="message">
    <div class="message-header">
        <p>{{ "$staff->firstName $staff->lastName" }}</p>
    
        <div class="buttons">
            @if ( !$staff->isCompleted )
                <my-link class="is-primary is-rounded" lined="true" href="{{ route('staffs.work.edit', $staff->id) }}" title="Add Information">
                    <span class="fa fa-plus"></span>
                </my-link>

                <form method="post" action="{{ route('staffs.destroy', $staff->id) }}" style="margin-right: 0.5em;">
                    @csrf
                    @method ('delete')

                    <my-submit class="is-danger is-rounded" lined="true" title="Delete">
                        <span class="fa fa-trash"></span>
                    </my-submit>
                </form>
            @endif{{-- ( !$staff->isCompleted ) --}}

            <my-link class="is-warning is-rounded" lined="true" href="{{ route('staffs.edit', $staff->id) }}" title="Update">
                <span class="fa fa-edit"></span>
            </my-link>
            
            <my-link class="is-success is-rounded" lined="true" href="{{ route('staffs.index') }}" title="Go Back">
                <span class="fa fa-arrow-left"></span>
            </my-link>
        </div>
    </div><!-- message-header -->

    <div class="message-body">
        @include('shared.bulma-status')

        <article class="media">
            <figure class="media-left">
                <figure class="image" style="width: 225px; height: 225px;">
                    <img src="{{ asset("/storage/staffs/$staff->image") }}">
                </figure>
            </figure><!-- media-left -->
        
            <div class="media-content">
                <info attr="I.D. No">{{ $staff->user->idNumber }}</info>
                <info attr="First Name">{{ $staff->firstName }}</info>
                <info attr="Middle Name">{{ $staff->middleName }}</info>
                <info attr="Last Name">{{ $staff->lastName }}</info>
                <info attr="Nick Name">{{ $staff->nickName }}</info>
            </div><!-- media-right -->
        </article><!-- media -->        
    </div><!-- message-body -->
</article><!-- message -->
