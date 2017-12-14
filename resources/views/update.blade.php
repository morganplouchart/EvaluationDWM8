@extends('layouts.base')
@section('title', 'update')
@section('main')

<<<<<<< HEAD
    <h1>Modifier jeux</h1>
    <div class="form">
        {!! Form::open(['url' => '/game/update', 'class' => 'insertForm']) !!}
        {{{ Form::hidden('id', $game->id)}}}
        <div class="form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('nom', $game->nom) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('Date') }}}
            {{{ Form::text('date', $game->date) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('Editeur') }}}
            {{{ Form::text('editeur', $game->editeur) }}}
        </div>

    </div>
    {{{ Form::submit('updater un jeux') }}}
=======
    <h1>Modifier chat</h1>
    <div class="form">
    {!! Form::open(['url' => '/cat/update', 'class' => 'insertForm']) !!}
    {{{ Form::hidden('id', $cat->id)}}}
    <div class="form-group">
        {{{ Form::label('Nom') }}}

        {{{ Form::text('name', $cat->name) }}}

    </div>
    <div class="form-group">
        {{{ Form::label('Taille') }}}
        {{{ Form::number('size', $cat->size) }}}
    </div>
    <div class="form-group">
        {{{ Form::label('Poids') }}}
        {{{ Form::number('weight', $cat->weight) }}}
    </div>
    <div class="form-group">
        {{{ Form::label('Age') }}}
        {{{ Form::number('Age', $cat->age) }}}
    </div>
    <div class="form-group">
        {{{ Form::label('Sexe') }}}
        {{{ Form::select('gender', $genders, $cat->gender->id) }}}
    </div>
    <div class="form-group">
        {{{ Form::label('Couleur') }}}
        {{{ Form::select('colors[]', $colors, $cat->colors, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('updater un chat') }}}
>>>>>>> de2d4612dda96391e04a5df73e24a39f1bcaa991
    {!! Form::close() !!}

    </div>

@endsection