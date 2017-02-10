@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
	@foreach($caesars as $caesar)
	<div class="ui message">
		<div class="header">{{$caesar->title}}</div>
		<p>{{$caesar->message}}</p>
	</div>
	@endforeach
@endsection