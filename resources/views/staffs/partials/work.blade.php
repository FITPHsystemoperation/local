<article class="message">
    <div class="message-header">
        <p>Employment Information</p>

        <my-link class="is-warning is-rounded" lined="true" href="{{ route('staffs.work.edit', $staff->id) }}" title="Update">
            <span class="fa fa-edit"></span>
        </my-link>
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
