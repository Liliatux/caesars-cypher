@extends('layouts.app')

@section('content')
	<div class="ui menu">
		<a href="/" class="active item">Acceuil</a>
		<a href="/add" class="item">Ajouter un message</a>
	</div>
    <div class="ui centered three columns grid">
        <div class="column">
        	<h1>Messages</h1>
			@foreach($caesars as $caesar)
			<div class="ui message">
				<div class="header">{{$caesar->title}}</div>
				<p>{{$caesar->message}}</p>
			</div>
			@endforeach
		</div>
	</div>
@endsection