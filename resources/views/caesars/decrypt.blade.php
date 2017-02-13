@extends('layouts/app')

@section('content')
<div class="ui menu">
    <a href="/" class="item">Acceuil</a>
    <a href="/add" class="item">Ajouter un message</a>
</div>
<div class="ui centered three columns grid">
    <div class="column">
        <form action="/decryptMessage" method="post" class="ui form" id="dechiffre">
            {{csrf_field() }} {{method_field('PUT') }}
            <input type="hidden" value="{{$caesar->id}}">
            <label for="title">Titre</label><input type="text" id="title" name="title" value="{{$caesar->title}}">
            <label for="message">Message</label><textarea name="message" id="message" cols="20" rows="10">{{$caesar->message}}</textarea>
            <label for="decalage">Chiffrement (décalage du message)</label><input type="number" id="decalage" name="decalage" value="0">
            <button type="submit" class="ui green button"><i class="ui unlock icon"></i>Déchiffrer</button>
        </form>
    </div>
</div>
@endsection