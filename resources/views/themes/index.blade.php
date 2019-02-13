@extends ('shared.master')

@section('content')
    <div class="container my-3">
        <div class="card border-dark">
            <div class="card-header">
                <h3>Theme Manager</h3>
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
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>{{-- card --}}
    </div>{{-- container --}}
@endsection