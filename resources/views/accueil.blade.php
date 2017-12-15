@extends('layouts.base')

@section('title', 'Liste des jeux')
@section('main')

    <style>
        body{ background: white;}
    </style>
    <h1>Liste des jeux videos</h1>
    <div class="fulltable">

        <table class="table">

            <thead>
            <tr>
                <th>Nom</th>
                <th>Image</th>
                <th>Sortie</th>
                <th>Editeur</th>
                <th>Genre</th>
                <th>Console</th>
                <th>suppresion</th>
                <th>modifier</th>
            </tr>
            </thead>
            <tbody>



            @foreach($games as $game)

                <tr>
                    <td>{{ $game->nom }}  </td>
                    <td><img src="img/{{$game->nom}}.jpg"/></td>
                    <td>{{ $game->date }} </td>
                    <td>{{ $game->editeur }} </td>


                    <td>
                @foreach($game->genre as $genre)
                    {{ $genre->genre }}
                @endforeach
                    </td>
                    <td>
                        @foreach($game->console as $console)
                            {{ $console->console }}
                        @endforeach
                    </td>
                        <td>
                            <form class="formdel"  method="GET" action="/game/delete/{{$game->id}}" >
                                <button type="submit" class="btnDel">
                                    {{ csrf_field() }}
                                    <i class="fa fa-ban fa-2x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>

                        <td>

                            <form class="formdel" method="GET" action="/game/update/{{$game->id}}" >
                                <button type="submit" class="btnDel">
                                    {{ csrf_field() }}
                                    <i class="fa fa-arrow-circle-o-up fa-2x" aria-hidden="true"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
