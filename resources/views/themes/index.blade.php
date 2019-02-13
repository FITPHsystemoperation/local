@extends ('shared.master')

@section('content')
    <div class="container my-3">
        <div class="card border-dark">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>Theme Manager</h3>
                    </div>{{-- col --}}

                    <div class="col text-right">
                        <a class="btn btn-primary" href="/themes/create" role="button">Add</a>
                    </div>{{-- col --}}
                </div>{{-- row --}}
            </div>{{-- card-header --}}  

            <div class="card-body">
                <table class="table border-bottom">
                    <thead>
                        <tr class="text-center">
                            <th>Theme</th>
                            <th>File</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($themes as $theme)
                            <tr class="text-center">
                                <td>
                                    <a href="/theme/{{ $theme->id }}">{{ $theme->name }}</a>
                                </td>

                                <td>{{ $theme->file }}</td>
                            </tr>
                        @endforeach{{-- $themes as $theme --}}
                    </tbody>
                </table>
            </div>
        </div>{{-- card --}}
    </div>{{-- container --}}
@endsection
