<div class="card border-dark">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h2>{{ "$staff->firstName $staff->lastName" }}</h2>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a class="btn btn-outline-info" href="{{ route('staffs.edit', $staff->id) }}">Update</a>

                <a class="btn btn-outline-secondary" href="{{ route('staffs.index') }}" role="button">Go Back</a>
            </div>{{-- col --}}             
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        @include('shared.status')

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img src="/storage/staffs/{{ $staff->image }}" alt="{{ $staff->user['idNumber'] }}_img" class="card-img-top" alt="...">
                </div>{{-- card --}}
            </div>{{-- col-sm-3 --}}

            <div class="col-sm-9">
                <h4 class="p-2">
                    <span class="lead">ID No.:</span>
                    {{ $staff->user['idNumber'] }}
                </h4>   

                <h4 class="p-2">
                    <span class="lead">First Name:</span>
                    {{ $staff->firstName }}
                </h4>                   

                <h4 class="p-2">
                    <span class="lead">Middle Name:</span>
                    {{ $staff->middleName }}
                </h4>

                <h4 class="p-2">
                    <span class="lead">Last Name:</span>
                    {{ $staff->lastName }}
                </h4>

                <h4 class="p-2">
                    <span class="lead">Nick Name:</span>
                    {{ $staff->nickName }}
                </h4>
            </div>{{-- col-sm-9 --}}
        </div>{{-- row --}}
    </div>{{-- card-body --}}

    @if ( !$staff->isCompleted )
        <div class="card-footer">
            <a href="{{ route('staffs.work.edit', $staff->id) }}" class="btn btn-primary float-left mr-2">Add Information</a>

            <form method="post" action="{{ route('staffs.destroy', $staff->id) }}" class="float-left">
                @csrf

                @method ('delete')

                <button type="Submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>{{-- card-footer --}}
    @endif{{-- ( !$staff->isCompleted ) --}}
</div>{{-- card --}}
