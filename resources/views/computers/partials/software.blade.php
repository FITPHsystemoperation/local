<div class="card mt-3 border-secondary">{{-- software --}}
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4>Softwares</h4>
            </div>{{-- col --}}
                
            <div class="col text-right">
                @can ('create', App\ComputerSoftware::class)
                    <a class="btn btn-primary" role="button" href="/computer/{{ $computer->id }}/software/create">Add</a>
                @endcan{{-- create --}}
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        @foreach ($computer->softwares as $software)
            <ul class="list-group {{ !$loop->last ? 'mb-3' : '' }}">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <h5>{{ ucfirst($software->software->softwareName) }}</h5>
                        </div>{{-- col --}}
                            
                        <div class="col text-right">
                            @can ('update', $software)
                                <a class="btn btn-sm btn-outline-secondary float-right" role="button"
                                    href="/computer-software/{{ $software->id }}/edit">Update</a>
                            @endcan
                        </div>{{-- col --}}
                    </div>{{-- row --}}
                </li>

                <li class="list-group-item">
                    <div class="row">
                        @foreach ($software->specs as $key => $spec)
                            <div class="col-md-3">
                                <h5>
                                    <span class="lead">{{ ucfirst($key) }}:</span>
                                    
                                    @if ( preg_match('/password/i', $key) && Gate::denies('viewPassword', $software))
                                        {!! preg_replace('/./', '&#9679;', $spec) !!}
                                    @else
                                        {{ $spec }}
                                    @endif
                                </h5>
                            </div>{{-- col --}}
                        @endforeach{{-- $software->specs as $key => $spec --}}
                    </div>{{-- row --}}
                </li>
            </ul>
        @endforeach{{-- $computer->softwares as $software --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}
