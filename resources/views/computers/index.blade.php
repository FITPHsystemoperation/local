@extends('shared.master')

@section('content')
    <div class="card border-secondary">
        <div class="card-header">
            <h2>Computer Inventory
                @can ('create', App\Computer::class)
                    <a class="btn btn-primary float-right" href="computers/create" role="button">Add New</a>
                @endcan
            </h2>
        </div>{{-- card-header --}}

        <div class="card-body">
            @include('shared.status')

            <table class="table border-bottom">
                <thead>
                    <tr class="text-center">
                        <th>CompName</th>
                        <th>Accounts</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($computers as $computer)
                        <tr class="text-center">
                            <td>
                                <a href="computer/{{ $computer->id }}">{{$computer->compName}}</a>
                            </td>
                            
                            <td>
                                @foreach ($computer->accounts as $account)
                                    {{ $account['accountName'] }}
                                    
                                    {{ !$loop->last ? '/ ' : '' }}
                                @endforeach
                            </td>
                            
                            <td>{{$computer->status}}</td>
                        </tr>
                    @endforeach{{-- ($computers as $computer) --}}
                </tbody>
            </table>
        </div>{{-- card-body --}}
    </div>{{-- card --}}
@endsection
