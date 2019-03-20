<article class="message">
    <div class="message-header">
        <p>Contact Information</p>
        
        <my-link class="is-warning is-rounded" lined="true" href="{{ route('staffs.contact.edit', $staff->id) }}" title="Update">
            <span class="fa fa-edit"></span>
        </my-link>
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
