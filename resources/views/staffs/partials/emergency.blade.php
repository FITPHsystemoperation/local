<article class="message">
    <div class="message-header">
        <p>Emergency Contact Information</p>

        <my-link class="is-warning is-rounded" lined="true" href="{{ route('staffs.emergency.edit', $staff->id) }}" title="Update">
            <span class="fa fa-edit"></span>
        </my-link>
    </div><!-- message-header -->

    <div class="message-body" style="padding-left: 5em;">
        <div class="content">
            <info attr="Contact Person">{{ $staff->emergencyPerson }}</info>
            <info attr="Contact No.">{{ $staff->emergencyNo }}</info>
            <info attr="Relationship">{{ $staff->emergencyRelation }}</info>
        </div>{{-- content --}}
    </div><!-- message-body -->
</article><!-- message -->
