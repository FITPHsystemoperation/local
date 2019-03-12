@extends('shared.layout')

@section('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>Computer Inventory</p>
                    
                    <my-link class="is-primary is-rounded" href="{{ route('computers.create') }}" title="Add New">
                        <span class="fa fa-plus"></span>
                    </my-link>
                </div><!-- message-header -->
            
                <div class="message-body">
                    @include('shared.bulma-status')
                    
                    @component ('shared.bulma-check-content', ['data' => $computers])
                        @slot ('content')
                            <table class="table is-fullwidth is-bordered is-hoverable">
                                <thead>
                                    <tr class="has-background-grey-light">
                                        <th class="has-text-centered">CompName</th>
                                        <th class="has-text-centered">Accounts</th>
                                        <th class="has-text-centered">Status</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($computers as $computer)
                                        <tr>
                                            <td class="has-text-centered">
                                                <a href="{{ route('computers.show', $computer->id) }}">{{$computer->compName}}</a>
                                            </td>
                                            
                                            <td class="has-text-centered">
                                                @foreach ($computer->accounts as $account)
                                                    {{ $account['accountName'] }}
                                                    
                                                    {{ !$loop->last ? '/ ' : '' }}
                                                @endforeach
                                            </td>
                                            
                                            <td class="has-text-centered">{{$computer->status}}</td>
                                        </tr>
                                    @endforeach{{-- ($computers as $computer) --}}
                                </tbody>
                            </table>
                        @endslot
                    @endcomponent
                </div><!-- message-body -->
            </article><!-- message -->
        </div><!-- container -->
    </section><!-- section -->
@endsection
