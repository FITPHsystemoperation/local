<div class="card mt-3 border-dark">{{-- account --}}
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Accounts</h4>
            </div>{{-- col --}}
                
            <div class="col text-right">
                @can ('create', App\ComputerAccount::class )
                    <a class="btn btn-primary" role="button" href="{{ route('computers.account.create', $computer->id) }}">Add</a>
                @endcan{{-- create --}}
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        @component ('shared.check-content', ['data' => $computer->accounts])
            @slot ('content')
                <table class="table border-bottom">
                    <thead>
                        <tr class="text-center">
                            <th>User Name</th>
                            <th>User Role</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($computer->accounts as $account)
                            <tr class="text-center">
                                <td>{{ $account->accountName }}</td>
                                
                                <td>{{ $account->type->type }}</td>
                                
                                <td>
                                    @if ( $account->type_id != 1 || Gate::allows('viewPassword', $computer) )
                                        {{ $account->password }}
                                    @else
                                        {!! preg_replace('/./', '&#9679;', $account->password) !!}
                                    @endif
                                </td>

                                <td>
                                    @can ('update', $account)
                                        <a class="btn btn-sm btn-outline-info" role="button"
                                            href="{{ route('computers.account.edit', [$computer->id, $account->id]) }}">Update</a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach{{-- $computer->accounts as $account --}}
                    </tbody>
                </table>
            @endslot
        @endcomponent
    </div>{{-- card-body --}}
</div>{{-- card --}}
