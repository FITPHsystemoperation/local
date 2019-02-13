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

    <div class="container my-3">
        @component ('pages.partials.content', ['staff' => $staff])
            @slot ('control')
                <div class="row">
                    <div class="col">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Theme: <strong>{{ ucwords($theme->name) }}</strong>  
                            </button>

                            <div class="dropdown-menu">
                                @foreach ($themes as $theme)
                                    <a class="dropdown-item" href="/select-theme/{{ $theme->id }}">
                                        {{ ucwords($theme->name) }}
                                    </a>
                                @endforeach{{-- $themes as $theme --}}
                            </div>{{-- dropdown --}}
                        </div>{{-- btn-group --}}
                    </div>{{-- col --}}
                        
                    <div class="col text-right">
                        <a class="btn btn-outline-secondary float-right" role="button"
                            href="/profile/{{ Auth::user()->staff['firstName'] . Auth::user()->staff['lastName'] }}">Go Back</a>
                            
                        <form method="post" action="/themes/{{ $theme->id }}/apply" class="float-right mr-2">
                            @csrf

                            <button type="submit" class="btn btn-warning">Apply Theme</button>
                        </form>
                    </div>{{-- col --}}             
                </div>{{-- row --}}
            @endslot{{-- control --}}
        @endcomponent{{-- pages.partials.content --}}
    </div>{{-- container --}}

    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  </body>
</html>
