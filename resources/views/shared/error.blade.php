@foreach ($errors->all() as $error)
    <p class="alert alert-danger text-center">{{ $error }}</p>
@endforeach