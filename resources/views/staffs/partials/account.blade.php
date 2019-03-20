<article class="message">
    <div class="message-header">
        <p>Account Information</p>
        
        <my-link class="is-warning is-rounded" lined="true" href="{{ route('staffs.account.edit', $staff->id) }}" title="Update">
            <span class="fa fa-edit"></span>
        </my-link>
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
