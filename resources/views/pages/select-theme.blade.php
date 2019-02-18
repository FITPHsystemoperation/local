<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
    <!-- Bootstrap CSS -->
    <link href="{!! asset($theme->file) !!}" rel="stylesheet">

    <title>System Support</title>
  </head>
  
  <body>
    @include('shared.nav')

    @component ('pages.partials.content', ['staff' => $staff])
        @slot ('control')
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Theme: <strong>{{ ucwords($theme->name) }}</strong>  
                        </button>

                        <div class="dropdown-menu">
                            @foreach ($themes as $option)
                                <a class="dropdown-item" href="{{ route('theme.select', $option->id) }}">
                                    {{ ucwords($option->name) }}
                                </a>
                            @endforeach{{-- $themes as $option --}}
                        </div>{{-- dropdown --}}
                    </div>{{-- btn-group --}}
                </div>{{-- col --}}
                    
                <div class="col text-right">
                    <a class="btn btn-outline-secondary float-right" role="button"
                        href="{{ route('profile', Auth::user()->staff['firstName'] . Auth::user()->staff['lastName']) }}">Go Back</a>
                        
                    <form method="post" action="{{ route('theme.apply', $theme->id) }}" class="float-right mr-2">
                        @csrf
                        @method ('patch')

                        <button type="submit" class="btn btn-warning">Apply Theme</button>
                    </form>
                </div>{{-- col --}}             
            </div>{{-- row --}}
        @endslot{{-- control --}}
    @endcomponent{{-- pages.partials.content --}}

    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  </body>
</html>
