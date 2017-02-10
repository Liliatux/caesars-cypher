@extends('layouts/app')

@section('content')
<div class="ui menu">
    <a href="/" class="item">Acceuil</a>
    <a href="/add" class="item">Ajouter un message</a>
</div>
<div class="ui centered three columns grid">
    <div class="column">        
		<textarea name="decryptMessage" id="" cols="30" rows="10">{{$decrypt}}</textarea>
	</div>
</div>

@endsection
