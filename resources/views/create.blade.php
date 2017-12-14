@extends('layouts.base')
@section('title', 'insertion')
@section('main')
    <h1>Ajouter un jeux </h1>

    <div class="container">

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
            <div class="form-group">
            {{{ Form::submit('inserer un jeux' , ['class' => 'btnSub']) }}}
            {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection