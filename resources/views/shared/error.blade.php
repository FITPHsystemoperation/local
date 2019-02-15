@foreach ($errors->all() as $error)
    <div class="alert alert-danger text-center">
        {{ $error }}
    </div>
@endforeach