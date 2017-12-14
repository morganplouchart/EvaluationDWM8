@extends('layouts.base')
@section('title', 'insertion')
@section('main')

    <h1>Modifier un jeux </h1>
    <div class="table">
        {!! Form::open(['url' => '/game/insert', 'class' => 'insertForm']) !!}

        <div class="form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('nom') }}}

        </div>
        <div class="form-group">
            {{{ Form::label('Date') }}}
            {{{ Form::text('date') }}}
        </div>

        <div class="form-group">
            {{{ Form::label('Editeur') }}}
            {{{ Form::text('editeur') }}}
        </div>

        <div class="form-group">
            {{{ Form::label('Genre') }}}
            {{{ Form::text('genre') }}}
        </div>

        {{{ Form::submit('inserer un jeux'), ['class' => 'btn'] }}}
        {!! Form::close() !!}

    </div>

@endsection