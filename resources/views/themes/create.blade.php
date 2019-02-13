@extends ('shared.master')

@section ('content')
    <div class="container my-3">
        <div class="card border-dark">
            <div class="card-header">
                <h3>New Theme</h3>
            </div>{{-- card-header --}}

            <div class="card-body">
                @include ('shared.error')

                <form method="post" action="/themes" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">Theme Name:</label>
                        
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Theme Name" value="{{ old('name') }}" required autofocus>
                        </div>{{-- col --}}
                    </div>{{-- row --}}

                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label text-md-right">Theme Description:</label>
                        
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="description" name="description" placeholder="Theme Description" value="{{ old('description') }}" required autofocus>
                        </div>{{-- col --}}
                    </div>{{-- row --}}

                    <div class="form-group row">
                        <label for="file" class="col-md-3 col-form-label text-md-right">Attach Stylesheet:</label>
                        
                        <div class="col-md-7">
                            <input type="file" class="form-control-file" id="file" name="file" required>

                            <small class="form-text text-muted">
                                <strong>Must not be greater than 10mb</strong>
                            </small>
                        </div>{{-- col --}}
                    </div>{{-- row --}}

                    <div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Save Theme</button>

                            <a class="btn btn-outline-secondary" href="/themes" role="button">Go Back</a>
                        </div>{{-- col --}}
                    </div>{{-- row --}}
                </form>
            </div>{{-- card-body --}}
        </div>
    </div>{{-- container --}}
@endsection