@if ( $data->count() )
    {{ $content }}
@else
    <div class="alert alert-warning mb-0">
        <strong>No record found!</strong>
    </div>
@endif