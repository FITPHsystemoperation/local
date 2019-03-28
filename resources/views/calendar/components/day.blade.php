<div class="column is-paddingless">
    @if ($day->active)
        <div class="box is-radiusless is-clipped {{ $day->sunday ? 'has-background-white-ter': '' }}" style="padding: 1em; height: 6em;">
                <ul class="has-text-right is-pulled-right" style="margin-top: -5px;">
                    @foreach ( $day->tasks->take(3) as $task)
                        <li>
                            <span class="tag is-warning" title="{{ $task->description }}">
                                <a href="{{ route('tasks.show', [$task->date, $task->id]) }}">{{ ucwords($task->subject) }}</a>
                            </span>
                        </li>
                    @endforeach
                </ul>

                <p class="title is-6 has-text-weight-bold">
                    <a href="{{ route('tasks.index', $day->date) }}" class="{{ $day->sunday ? 'has-text-danger': '' }}">
                        {{ $day->day }}
                    </a>
                </p>

                @if ( $day->isToday() )
                    <p class="icon fa fa-calendar-day has-text-success is-medium" title="Today" style="margin: -11px 0 0 -6px;"></p>
                @endif
        </div>
    @else
        <div class="box is-radiusless is-unselectable {{ $day->sunday ? 'has-background-white-ter': '' }}" style="padding: 1em; height: 6em;">
            <p class="title is-6 has-text-grey-light">
                {{ $day->day }}
            </p>
        </div>
    @endif
</div><!-- column -->