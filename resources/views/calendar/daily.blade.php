@extends ('shared.layout')

@section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>{{ $day->fullDate }}</p>

                    <div class="buttons">
                        <my-link class="is-primary is-rounded" lined="true" title="Go Back"
                            href="{{ route('calendar', [$day->month, $day->year]) }}">
                            <span class="fa fa-arrow-left"></span>
                        </my-link>
                    </div>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @component ('shared.bulma-check-content')
                        test
                    @endcomponent
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection