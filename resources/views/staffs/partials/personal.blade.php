<article class="message">
    <div class="message-header">
        <p>Personal Information</p>

        <my-link class="is-warning is-rounded" lined="true" href="{{ route('staffs.personal.edit', $staff->id) }}" title="Update">
            <span class="fa fa-edit"></span>
        </my-link>
    </div><!-- message-header -->

    <div class="message-body" style="padding-left: 5em;">
        <div class="content">
            <info attr="Birth Date">{{ date('F j, Y', strtotime($staff->birthday)) }}</info>
            <info attr="Gender">{{ $staff->gender === 'm' ? 'Male' : 'Female' }}</info>
            <info attr="Civil Status">{{ $staff->civilStatus }}</info>
        </div>{{-- content --}}
    </div><!-- message-body -->
</article><!-- message -->
