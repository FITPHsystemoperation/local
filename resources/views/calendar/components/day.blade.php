<div class="column is-paddingless">
    @if ($day->active)
        <a href="#{{ $day->day }}">
            <div class="box is-radiusless {{ $day->sunday ? 'has-background-white-ter': '' }}" style="padding: 1em; height: 6em;">
                <p class="title is-6 has-text-weight-bold {{ $day->sunday ? 'has-text-danger': '' }}">
                    {{ $day->day }}
                </p>
                @foreach ( $day->tasks as $task)
                    <div class="tag is-info is-pulled-right">
                        {{ $task->subject }}
                    </div>
                @endforeach
            </div>
        </a>
    @else
        <div class="box is-radiusless is-unselectable {{ $day->sunday ? 'has-background-white-ter': '' }}" style="padding: 1em; height: 6em;">
            <p class="title is-6 has-text-grey-light">
                {{ $day->day }}
            </p>
        </div>
    @endif
</div><!-- column -->