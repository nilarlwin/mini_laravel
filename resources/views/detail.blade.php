@extends('master')
@section('content')


@if($status)
<h2>Status is True</h2>

@else
<h2>Status is False</h2>
@endif

@for($i=0;$i<10;$i++)
{{ $i }}
@endfor

@foreach($users as $user)
{{ $user }}
@endforeach 


@endsection