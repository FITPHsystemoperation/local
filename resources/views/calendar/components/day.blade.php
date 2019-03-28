<div class="column is-paddingless">
    @if ($day->active)
        <div class="box is-radiusless is-clipped {{ $day->sunday ? 'has-background-white-ter': '' }}" style="padding: 1em; height: 6em;">
                <ul class="has-text-right is-pulled-right" style="margin-top: -5px;">
                    @if ( $day->tasks->count() <= 3 )
                        @foreach ( $day->tasks as $task)
                            <li>
                                <a href="{{ route('tasks.show', [$task->date, $task->id]) }}">
                                    <span class="tag is-info has-text-white" title="{{ $task->description }}">
                                        {{ ucwords($task->subject) }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    @else
                        @foreach ( $day->tasks->take(2) as $task)
                            <li>
                                <a href="{{ route('tasks.show', [$task->date, $task->id]) }}">
                                    <span class="tag is-info has-text-white" title="{{ $task->description }}">
                                        {{ ucwords($task->subject) }}
                                    </span>
                                </a>
                            </li>
                        @endforeach

                        <li>
                            <a href="{{ route('tasks.index', $day->date) }}">
                                <span class="help">see more...</span>
                            </a>
                        </li>
                    @endif
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