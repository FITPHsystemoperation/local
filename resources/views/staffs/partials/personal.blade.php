<div class="card mt-3 border-dark">{{-- personal --}}
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>Personal Information</h3>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a href="/staff/{{ $staff->id }}/personal" class="btn btn-outline-info">Update</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="offset-md-1 col-sm-11">
                <h4 class="p-2">
                    <span class="lead">Birth Date:</span>
                    {{ $staff->birthday }}
                </h4>   

                <h4 class="p-2">
                    <span class="lead">Gender:</span>
                    {{ $staff->gender === 'm' ? 'Male' : 'Female' }}
                </h4>

                <h4 class="p-2">
                    <span class="lead">Civil Status:</span>
                    {{ $staff->civilStatus }}
                </h4>                   
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}