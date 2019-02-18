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
                        <a class="btn btn-primary" href="{{ route('themes.create') }}" role="button">Add</a>
                    </div>{{-- col --}}
                </div>{{-- row --}}
            </div>{{-- card-header --}}  

            <div class="card-body">
                @include ('shared.status')

                <table class="table border-bottom">
                    <thead>
                        <tr class="text-center">
                            <th>Theme</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($themes as $theme)
                            <tr class="text-center">
                                <td>
                                    {!! !$theme->enabled ? '<strike>' : '' !!}
                                        <a href="{{ route('themes.show', $theme->id) }}">{{ ucwords($theme->name) }}</a>
                                    {!! !$theme->enabled ? '</strike>' : '' !!}
                                </td>

                                <td>{{ ucwords($theme->description) }}</td>

                                <td>
                                    <a href="{{ asset($theme->file) }}" target="_blank">{{ $theme->file }}</a>
                                </td>

                                <td>
                                    <form method="post" action="{{ route('themes.update', $theme->id) }}">
                                        @csrf

                                        @method ('patch')

                                        @if ( $theme->enabled )
                                            <input type="hidden" name="enabled" value="0">

                                            <button type="submit" class="btn btn-outline-danger btn-sm">Disable</button>
                                        @else
                                            <input type="hidden" name="enabled" value="1">

                                            <button type="submit" class="btn btn-primary btn-sm">Enable</button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach{{-- $themes as $theme --}}
                    </tbody>
                </table>
            </div>
        </div>{{-- card --}}
    </div>{{-- container --}}
@endsection
