@extends('shared.master')

@section('content')
    @component ('pages.partials.content', ['staff' => $staff])
    	@slot ('control')
    		<div class="row">
	            <div class="col">
	                <h2>{{ "$staff->firstName $staff->lastName" }}</h2>
	            </div>{{-- col --}}
	                
	            <div class="col text-right">
	                @if ( Auth::user()->theme )
	                    <a class="btn btn-warning" role="button" href="/select-theme/{{ Auth::user()->theme_id }}">Select Theme</a>
	                @else
	                    <a class="btn btn-warning" role="button" href="/select-theme/{{ config('app.theme') }}">Select Theme</a>
	                @endif
	                
	                <a class="btn btn-info" href="{{ route('password.reset') }}" role="button">Change Password</a>
	            </div>{{-- col --}}             
	        </div>{{-- row --}}
    	@endslot{{-- control --}}
    @endcomponent{{-- pages.partials.content --}}
@endsection
