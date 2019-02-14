<div class="card mt-3 border-dark">{{-- contact-info --}}
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>Contact Information</h3>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a href="{{ route('staffs.contact.edit', $staff->id) }}" class="btn btn-outline-info">Update</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        <div class="row">
            <div class="offset-md-1 col-sm-11">
                <h4 class="p-2">
                    <span class="lead">Contact No:</span>
                    {{ $staff->contactNo }}
                </h4>   

                <h4 class="p-2">
                    <span class="lead">Email Address:</span>
                    {{ $staff->emailAddress }}
                </h4>                   

                <h4 class="p-2">
                    <span class="lead">Permanent Address:</span>
                    {{ $staff->permanentAddress }}
                </h4>

                <h4 class="p-2">
                    <span class="lead">Present Address:</span>
                    {{ $staff->presentAddress }}
                </h4>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}