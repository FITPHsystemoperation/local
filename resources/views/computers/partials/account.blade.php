<article class="message">
    <div class="message-header">
        <p>Accounts</p>

        <my-link class="is-primary is-rounded" lined="true" href="{{ route('computers.account.create', $computer->id) }}" title="Add Account">
            <span class="fas fa-plus"></span>
        </my-link>
    </div><!-- message-header -->

    <div class="message-body">
        @component ('shared.bulma-check-content', ['data' => $computer->accounts])
            @slot ('content')
                <table class="table is-fullwidth is-bordered is-hoverable">
                    <thead>
                        <tr class="has-background-grey-light">
                            <th class="has-text-centered">User Name</th>
                            <th class="has-text-centered">User Role</th>
                            <th class="has-text-centered">Password</th>
                            <th class="has-text-centered">Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        </tr>
                        @foreach ($computer->accounts as $account)
                            <tr class="text-center">
                                <td class="has-text-centered">{{ $account->accountName }}</td>
                                <td class="has-text-centered">{{ $account->type->type }}</td>
                                <td class="has-text-centered">
                                    {!! Gate::allows('viewPassword', $account) ?
                                        $account->password: preg_replace('/./', '&#9679;', $account->password)
                                    !!}
                                </td>
                                <td class="has-text-centered">
                                    <my-link class="is-info is-small is-rounded" lined="true" title="Update Account" 
                                        href="{{ route('computers.account.edit', [$computer->id, $account->id]) }}">
                                        <span class="fas fa-edit"></span>
                                    </my-link>    
                                </td>
                            </tr>
                        @endforeach{{-- $computer->accounts as $account --}}
                    </tbody>
                </table>
            @endslot
        @endcomponent
    </div><!-- message-body -->
</article><!-- message -->
