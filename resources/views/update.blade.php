@extends('layouts.base')
@section('title', 'update')
@section('main')

    <h1>Modifier jeux</h1>
<div class="container">
    <div class="table">

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

        <div class="form-group">
            {{{ Form::label('Genre') }}}
            {{{ Form::text('genre', $game->genre_id) }}}
        </div>

        <div class="form-group">
    {{{ Form::submit('updater un jeux', ['class' => 'btnSub']) }}}
    </div>
</div>

@endsection