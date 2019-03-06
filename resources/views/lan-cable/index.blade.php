@extends ('shared.layout')

@section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>LAN Cables</p>
                    <a class="button is-primary is-rounded" href="{{ route('cables.create') }}"><span class="fa fa-plus"></span></a>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @component ('shared.bulma-check-content', ['data' => $cables])
                        @slot ('content')
                            <table class="table is-fullwidth is-bordered is-striped is-hoverable">
                                <thead>
                                    <tr>
                                        <th class="has-text-centered">Tag</th>
                                        <th class="has-text-centered">Description</th>
                                        <th class="has-text-centered">Action</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($cables as $cable)
                                        <tr>
                                            <td class="has-text-centered">{{ $cable->name }}</td>
                                            <td class="has-text-centered">{{ $cable->description }}</td>
                                            <td class="has-text-centered"><button class="button is-warning is-outlined is-small">Update</button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endslot
                    @endcomponent
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- se class="has-text-cent class="has-text-centered" class="has-text-centered"ered"ction -->
@endsection
