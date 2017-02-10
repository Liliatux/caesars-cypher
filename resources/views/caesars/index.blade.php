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
				<div class="content">
					<div class="header">{{$caesar->title}}</div>
					<p>{{$caesar->message}}</p>
				</div>
				<br>
				<a href="/decrypt/{{$caesar->id}}"><button class="ui small green button"><i class="edit icon"></i></button></a>
				<form action="/delete/{{$caesar->id}}" method="post">{{csrf_field() }} {{method_field('DELETE') }} <button type="submit" class="ui small red button"><i class="delete icon"></i></button></form>
			</div>
			@endforeach
		</div>
	</div>
@endsection