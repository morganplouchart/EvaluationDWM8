@extends('layouts.base')
@section('title', 'accueil')
@section('main')


    <table class="table">
        <h1>Liste du Stock</h1>
        <thead class="thead-inverse">
        <tr>
            <th>Nom</th>
            <th>Editeur</th>
            <th>Date de sortie</th>
            <th>Genre</th>
            <th>suppresion</th>
            <th>modifier</th>


        </tr>
        </thead>
        <tbody>

        @foreach( $games as $game)
            <tr>
                <td>{{ $game->nom }} </td>
                <td>{{ $game->editeur }} </td>
                <td>{{ $game->date }} </td
                <td>{{ $game->genre }} </td>

                @foreach($game->genre as $genre)
                    <span>{{ $genre->nom }} </span>
                @endforeach


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
                    <button type="submit" class="btnup">
                        {{ csrf_field() }}
                        <i class="fa fa-arrow-circle-o-up fa-2x" aria-hidden="true"></i>
                    </button>
                </form>

            </td>

            </tr>
        @endforeach
        </tbody>

    </table>
@endsection