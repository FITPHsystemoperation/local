<div class="card mt-3 border-dark">{{-- work information --}}
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h3>Employment Information</h3>
            </div>{{-- col --}}
                
            <div class="col text-right">
                <a href="/staff/{{ $staff->id }}/working-data" class="btn btn-outline-info">Update</a>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-header --}}

    <div class="card-body">
        <div class="row">
            <div class="offset-md-1 col-sm-11">
                <h4 class="p-2">
                    <span class="lead">Date Hired:</span>
                    {{ date('F j, Y', strtotime($staff->dateHired)) }}
                </h4>   

                <h4 class="p-2">
                    <span class="lead">Employment Status:</span>
                    {{ $staff->employmentStat['statDesc'] }}
                </h4>                   

                <h4 class="p-2">
                    <span class="lead">Job Title:</span>
                    {{ $staff->jobTitle['titleName'] }}
                </h4>

                <h4 class="p-2">
                    <span class="lead">Department:</span>
                    {{ $staff->department['departmentName'] }}
                </h4>

                <h4 class="p-2">
                    <span class="lead">Daily Rate:</span>
                    {{ $staff->dailyRate }}
                </h4>
            </div>{{-- col --}}
        </div>{{-- row --}}
    </div>{{-- card-body --}}
</div>{{-- card --}}