<div class="card mt-3 border-secondary">{{-- emergency information --}}
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>Emergency Contact Information</h3>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a href="/staff/{{ $staff->id }}/emergency" class="btn btn-outline-info">Update</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        <div class="row">
            <div class="offset-md-1 col-sm-11">
                <h4 class="p-2">
                    <span class="lead">Contact Person:</span>
                    {{ $staff->emergencyPerson }}
                </h4>   

                <h4 class="p-2">
                    <span class="lead">Contact No:</span>
                    {{ $staff->emergencyNo }}
                </h4>                   

                <h4 class="p-2">
                    <span class="lead">Relationship:</span>
                    {{ $staff->emergencyRelation }}
                </h4>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}