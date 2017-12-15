@extends('layouts.base')
@section('title', 'Modifier un jeux')
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
            {{{ Form::date('date', $game->date) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('Editeur') }}}
            {{{ Form::text('editeur', $game->editeur) }}}
        </div>


        <div class="form-group">

            {{{ Form::label('Genre') }}}

            {{{ Form::select('genres[]', $genres, $game->genre, ['multiple' => true, 'class' => 'select-genre']) }}}


        </div>

        <div class="form-group">

            {{{ Form::label('Consoles') }}}

            {{{ Form::select('consoles[]', $consoles, $game->console, ['multiple' => true, 'class' => 'select-genre']) }}}


        </div>

        <div class="form-group">
    {{{ Form::submit('updater un jeux', ['class' => 'btnSub']) }}}
    </div>
</div>

@endsection