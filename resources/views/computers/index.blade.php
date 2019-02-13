@extends('shared.master')

@section('content')
    <div class="container my-3">
        
        <div class="card border-dark">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2>Computer Inventory</h2>
                    </div>{{-- col --}}
                        
                    <div class="col text-right">
                        @can ('create', App\Computer::class)
                            <a class="btn btn-primary float-right" href="computers/create" role="button">Add New</a>
                        @endcan
                    </div>{{-- col --}}
                </div>{{-- row --}}
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
    </div>{{-- container --}}
@endsection
