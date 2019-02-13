<div class="container my-3">
    <div class="card border-dark">
        <div class="card-header">
            {{ $control }}
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
    </div>{{-- card --}}

    @if ($staff->isCompleted)
        <div class="card mt-3 border-dark">{{-- work information --}}
            <div class="card-header">
                <h3>Employment Information</h3>
            </div>{{-- card-header --}}

            <div class="card-body">
                <div class="row">
                    <div class="offset-md-1 col-sm-11">
                        <h4 class="p-2">
                            <span class="lead">Date Hired:</span>
                            {{ $staff->dateHired }}
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

        <div class="card mt-3 border-dark">{{-- contact-info --}}
            <div class="card-header">
                <h3>Contact Information</h3>
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

        <div class="card mt-3 border-dark">{{-- emergency information --}}
            <div class="card-header">
                <h3>Emergency Contact Information</h3>
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

        <div class="card mt-3 border-dark">{{-- accounts --}}
            <div class="card-header">
                <h3>Account Information</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="offset-md-1 col-sm-11">
                        <h4 class="p-2">
                            <span class="lead">B.I.R. No.:</span>
                            {{ $staff->birNo }}
                        </h4>   

                        <h4 class="p-2">
                            <span class="lead">S.S.S. No:</span>
                            {{ $staff->sssNo }}
                        </h4>                   

                        <h4 class="p-2">
                            <span class="lead">Pagibig No.:</span>
                            {{ $staff->pagibigNo }}
                        </h4>

                        <h4 class="p-2">
                            <span class="lead">Philhealth No.:</span>
                            {{ $staff->philhealthNo }}
                        </h4>

                        <h4 class="p-2">
                            <span class="lead">Bank Account No.:</span>
                            {{ $staff->bankNo }}
                        </h4>
                    </div>{{-- col --}}
                </div>{{-- row --}}
            </div>{{-- card-body --}}
        </div>{{-- card --}}

        <div class="card mt-3 border-dark">{{-- personal --}}
            <div class="card-header">
                <h3>Personal Information</h3>
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
    @endif{{-- ($staff->isCompleted) --}}
</div>{{-- container --}}
    