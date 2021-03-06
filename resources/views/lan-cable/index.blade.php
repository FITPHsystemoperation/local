@extends ('shared.layout')

@section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>LAN Cables</p>

                    <my-link class="is-primary is-rounded" href="{{ route('cables.create') }}" title="Add New">
                        <span class="fa fa-plus"></span>
                    </my-link>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @include ('shared.bulma-status')

                    @component ('shared.bulma-check-content', ['data' => $cables])
                        @slot ('content')
                            <table class="table is-fullwidth is-bordered is-hoverable">
                                <thead>
                                    <tr class="has-background-grey-light">
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
                                            
                                            <td class="has-text-centered">
                                                <my-link class="is-small is-info is-rounded" lined="true"
                                                    href="{{ route('cables.edit', $cable->id) }}" title="Update">
                                                    <span class="fas fa-edit"></span>
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
    </section><!-- se class="has-text-cent class="has-text-centered" class="has-text-centered"ered"ction -->
@endsection
