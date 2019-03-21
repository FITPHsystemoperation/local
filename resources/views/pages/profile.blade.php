@extends('shared.layout')

@section('content')
    <section class="section">
        <div class="container">
            <article class="message">
                <div class="message-header">
                    <p>{{ "$staff->firstName $staff->lastName" }}</p>
                
                    <my-link class="is-primary is-rounded" href="{{ route('password.reset') }}" title="Settings">
                        <span class="fa fa-user-cog"></span>
                    </my-link>
                </div><!-- message-header -->

                <div class="message-body">
                    @include('shared.bulma-status')

                    <article class="media">
                        <figure class="media-left">
                            <figure class="image" style="width: 210px; height: 210px;">
                                <img src="{{ asset("/storage/staffs/$staff->image") }}">
                            </figure>
                        </figure><!-- media-left -->
                    
                        <div class="media-content" style="padding-left: 1em;">
                            <div class="content">
                                <info attr="I.D. No">{{ $staff->user->idNumber }}</info>
                                <info attr="First Name">{{ $staff->firstName }}</info>
                                <info attr="Middle Name">{{ $staff->middleName }}</info>
                                <info attr="Last Name">{{ $staff->lastName }}</info>
                                <info attr="Nick Name">{{ $staff->nickName }}</info>
                            </div>
                        </div><!-- media-right -->
                    </article><!-- media -->        
                </div><!-- message-body -->
            </article><!-- message -->

            @if ($staff->isCompleted)
                <article class="message">
                    <div class="message-header">
                        <p>Employment Information</p>
                    </div><!-- message-header -->

                    <div class="message-body" style="padding-left: 5em;">
                        <div class="content">
                            <info attr="Date Hired">{{ date('F j, Y', strtotime($staff->dateHired)) }}</info>
                            <info attr="Employment Status">{{ optional($staff->employmentStat)->statDesc }}</info>
                            <info attr="Job Title">{{ optional($staff->jobTitle)->titleName }}</info>
                            <info attr="Department">{{ optional($staff->department)->departmentName }}</info>
                            <info attr="Daily Rate">{{ $staff->dailyRate }}</info>
                        </div>{{-- content --}}
                    </div><!-- message-body -->
                </article><!-- message -->

                <article class="message">
                    <div class="message-header">
                        <p>Contact Information</p>
                    </div><!-- message-header -->

                    <div class="message-body" style="padding-left: 5em;">
                        <div class="content">
                            <info attr="Contact No.">{{ $staff->contactNo }}</info>            
                            <info attr="Email Address">{{ $staff->emailAddress }}</info>            
                            <info attr="Permanent Address">{{ $staff->permanentAddress }}</info>            
                            <info attr="Present Address">{{ $staff->presentAddress }}</info>            
                        </div>{{-- content --}}
                    </div><!-- message-body -->
                </article><!-- message -->

                <article class="message">
                    <div class="message-header">
                        <p>Emergency Contact Information</p>
                    </div><!-- message-header -->

                    <div class="message-body" style="padding-left: 5em;">
                        <div class="content">
                            <info attr="Contact Person">{{ $staff->emergencyPerson }}</info>
                            <info attr="Contact No.">{{ $staff->emergencyNo }}</info>
                            <info attr="Relationship">{{ $staff->emergencyRelation }}</info>
                        </div>{{-- content --}}
                    </div><!-- message-body -->
                </article><!-- message -->

                <article class="message">
                    <div class="message-header">
                        <p>Account Information</p>
                    </div><!-- message-header -->

                    <div class="message-body" style="padding-left: 5em;">
                        <div class="content">
                            <info attr="B.I.R. No.">{{ $staff->birNo }}</info>
                            <info attr="S.S.S. No.">{{ $staff->sssNo }}</info>
                            <info attr="Pagibig No.">{{ $staff->pagibigNo }}</info>
                            <info attr="Philhealth No.">{{ $staff->philhealthNo }}</info>
                            <info attr="Bank Account No.">{{ $staff->bankNo }}</info>
                        </div>{{-- content --}}
                    </div><!-- message-body -->
                </article><!-- message -->

                <article class="message">
                    <div class="message-header">
                        <p>Personal Information</p>
                    </div><!-- message-header -->

                    <div class="message-body" style="padding-left: 5em;">
                        <div class="content">
                            <info attr="Birth Date">{{ date('F j, Y', strtotime($staff->birthday)) }}</info>
                            <info attr="Gender">{{ $staff->gender === 'm' ? 'Male' : 'Female' }}</info>
                            <info attr="Civil Status">{{ $staff->civilStatus }}</info>
                        </div>{{-- content --}}
                    </div><!-- message-body -->
                </article><!-- message -->
            @endif{{-- ($staff->isCompleted) --}}
        </div><!-- container -->
    </section><!-- section -->
@endsection
