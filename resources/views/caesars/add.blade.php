@extends('layouts/app')

@section('content')
<div class="ui menu">
	<a href="/" class="item">Accueil</a>
	<a href="/add" class="active item">Ajouter un message</a>
</div>
<div class="ui centered three columns grid">
	<div class="column">
		<form action="/addMessage" method="post" class="ui form">
			{{csrf_field() }}
			<label for="title">Titre</label><input type="text" id="title" name="title">
			<label for="message">Message</label><textarea name="message" id="message" cols="20" rows="10"></textarea>
			<label for="decalage">Chiffrement (décalage du message)</label><input type="number" id="decalage" name="decalage">
			<button type="submit" class="ui green button"><i class="ui lock icon"></i>Crypter</button>
		</form>
	</div>
</div>
@endsection
