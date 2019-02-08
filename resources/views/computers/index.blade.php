@extends('shared.master')

@section('content')

<div class="row justify-content-center">

<div class="col-sm-8">

<div class="card my-3 border-secondary">

<div class="card-header">

<h2>Computer Inventory

@can ('create', App\Computer::class)
<a class="btn btn-primary float-right" href="computers/create" role="button">Add New</a>
@endcan

</h2>

</div>

<div class="card-body">

@include('shared.status')

<table class="table border-bottom">

<thead>
<tr class="text-center">
<th>CompName</th>
<th>Accounts</th>
<th>Status</th>
</tr>
</thead>

<tbody>
@foreach ($computers as $computer)
<tr class="text-center">
<td>
<a href="computer/{{ $computer->id }}">
{{$computer->compName}}
</a>
</td>
<td>
@foreach ($computer->accounts as $account)
{{ $account['accountName'] }}
{{ !$loop->last ? '/ ' : '' }}
@endforeach
</td>
<td>{{$computer->status}}</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</div>
</div>
</div>

@endsection
