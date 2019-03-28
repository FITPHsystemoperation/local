@extends ('shared.layout')

@section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>Tasks List</p>

                    <div class="buttons">
                        <my-link class="is-primary is-rounded" lined="true" title="Add New"
                             href="{{ route('tasks.create', $day->date) }}">
                            <span class="fa fa-plus"></span>
                        </my-link>

                        <my-link class="is-success is-rounded" lined="true" title="Go Back"
                            href="{{ route('calendar', [$day->month, $day->year]) }}">
                            <span class="fa fa-arrow-left"></span>
                        </my-link>
                    </div>
                </div><!-- message-header -->
            
                <div class="message-body">
                    <p class="title is-4">{{ $day->fullDate }}</p>
                    @include ('shared.bulma-status')
                        
                    @component ('shared.bulma-check-content', ['data' => $day->tasks])
                        @slot ('content')
                            <table class="table is-fullwidth is-bordered is-hoverable">
                                <thead>
                                    <tr class="has-background-grey-light">
                                        <th class="has-text-centered">Subject</th>
                                        <th class="has-text-centered">Description</th>
                                        <th class="has-text-centered">Action</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ( $day->tasks as $task)
                                        <tr>
                                            <td class="has-text-centered">{{ ucwords($task->subject) }}</td>
                                            <td class="has-text-centered">{{ $task->description }}</td>
                                            <td class="has-text-centered">
                                                <my-link class="is-info is-rounded is-small" lined="true" href="{{ route('tasks.edit', [$task->date, $task->id]) }}" title="Update">
                                                    <span class="fa fa-edit"></span>
                                                </my-link>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endslot
                    @endcomponent
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection