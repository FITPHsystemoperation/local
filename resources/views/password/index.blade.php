@extends ('shared.layout')

@section ('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>Password Manager</p>
            
                    <my-link class="is-primary is-rounded" href="{{ route('passwords.create') }}" title="Add New">
                        <span class="fa fa-plus"></span>
                    </my-link>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @include ('shared.bulma-status')

                    <table class="table is-fullwidth is-bordered is-hoverable">
                        <thead>
                            <tr class="has-background-grey-light">
                                <th class="has-text-centered">Subject</th>
                                <th class="has-text-centered">Password</th>
                                <th class="has-text-centered">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach ($passwords as $password)
                                <tr>
                                    <td class="has-text-centered">{{ $password->subject }}</td>
                                    <td class="has-text-centered">{{ $password->password }}</td>
                                    <td class="has-text-centered">
                                        <my-link class="is-info is-rounded is-small" lined="true" title="Update"
                                            href="{{ route('passwords.edit', $password->id) }}">
                                            <span class="fa fa-edit"></span>
                                        </my-link>
                                    </td>
                                </tr>
                            @endforeach{{-- $passwords as $password --}}
                        </tbody>
                    </table>
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
