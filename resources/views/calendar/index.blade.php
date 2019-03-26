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
                            <div class="column is-paddingless">
                                <div class="box is-radiusless" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('mon') ? 'has-text-grey-light': ''}}">
                                        {{ $week->getDay('mon') }}
                                    </p>
                                </div>
                            </div><!-- column -->

                            <div class="column is-paddingless">
                                <div class="box is-radiusless" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('tue') ? 'has-text-grey-light': ''}}">
                                        {{ $week->getDay('tue') }}
                                    </p>
                                </div>
                            </div><!-- column -->

                            <div class="column is-paddingless">
                                <div class="box is-radiusless" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('wed') ? 'has-text-grey-light': ''}}">
                                        {{ $week->getDay('wed') }}
                                    </p>
                                </div>
                            </div><!-- column -->

                            <div class="column is-paddingless">
                                <div class="box is-radiusless" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('thu') ? 'has-text-grey-light': ''}}">
                                        {{ $week->getDay('thu') }}
                                    </p>
                                </div>
                            </div><!-- column -->

                            <div class="column is-paddingless">
                                <div class="box is-radiusless" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('fri') ? 'has-text-grey-light': ''}}">
                                        {{ $week->getDay('fri') }}
                                    </p>
                                </div>
                            </div><!-- column -->

                            <div class="column is-paddingless">
                                <div class="box is-radiusless" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('sat') ? 'has-text-grey-light': ''}}">
                                        {{ $week->getDay('sat') }}
                                    </p>
                                </div>
                            </div><!-- column -->

                            <div class="column is-paddingless">
                                <div class="box is-radiusless has-background-white-ter" style="padding: 1em; height: 6em;">
                                    <p class="title is-6 has-text-weight-bold {{ ! $week->isIncluded('sun') ? 'has-text-grey-light': 'has-text-danger'}}">
                                        {{ $week->getDay('sun') }}
                                    </p>
                                </div>
                            </div><!-- column -->
                        </div><!-- columns -->
                    @endforeach
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
