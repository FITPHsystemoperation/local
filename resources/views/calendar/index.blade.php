 @extends ('shared.layout')

 @section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>Calendar</p>
                </div><!-- message-header -->
            
                <div class="message-body">
     

                    @include ('calendar.partials.months')
                    @include ('calendar.partials.years')

                    <div class="columns has-background-link has-text-centered" style="margin-top: 1em;">
                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Monday</p>
                        </div><!-- column -->

                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Tuesday</p>
                        </div><!-- column -->

                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Wednesday</p>
                        </div><!-- column -->

                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Thursday</p>
                        </div><!-- column -->

                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Friday</p>
                        </div><!-- column -->

                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Saturday</p>
                        </div><!-- column -->

                        <div class="column" style="padding: 0.5em;">
                            <p class="subtitle has-text-light is-6 has-text-weight-bold">Sunday</p>
                        </div><!-- column -->
                    </div><!-- columns -->

                    @foreach ( $month->weeks as $week )
                        <div class="columns">
                            @component ('calendar.components.day', ['day' => $week->get('mon')]) @endcomponent
                            @component ('calendar.components.day', ['day' => $week->get('tue')]) @endcomponent
                            @component ('calendar.components.day', ['day' => $week->get('wed')]) @endcomponent
                            @component ('calendar.components.day', ['day' => $week->get('thu')]) @endcomponent
                            @component ('calendar.components.day', ['day' => $week->get('fri')]) @endcomponent
                            @component ('calendar.components.day', ['day' => $week->get('sat')]) @endcomponent
                            @component ('calendar.components.day', ['day' => $week->get('sun')]) @endcomponent
                        </div><!-- columns -->
                    @endforeach
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
