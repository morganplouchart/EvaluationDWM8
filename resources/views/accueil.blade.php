@extends('layouts.base')
@section('title', 'accueil')
@section('main')

    <h1>Liste des chats</h1>


    <table class="table">
        <thead class="thead-inverse">
        <tr>
            <th>Nom</th>
            <th>Taille</th>
            <th>Poids</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Couleurs</th>
            <th>Supression</th>
            <th>Update</th>
        </tr>
        </thead>

        <tbody>


        @foreach( $cats as $cat)

            <th>{{ $cat->name }}</th>


            <th>{{ $cat->size }}</th>


            <th>{{ $cat->weight }}</th>


            <th>{{ $cat->age }}</th>



            @if($cat->gender)

            <th>{{{ $cat->gender->gender}}}</th>

            @else

            <th>N</th>

            @endif
            <th>
            @foreach($cat->colors as $color)
                 {{{ $color->color }}}
            @endforeach
            </th>
            <th>
                <form class="formdel"  method="GET" action="/cat/delete/{{$cat->id}}" >
                <button type="submit" class="btnDel">
                    {{ csrf_field() }}
                    <i class="fa fa-ban fa-2x" aria-hidden="true"></i>
                </button>
                </form>
            </th>

            <th>
                <form class="formdel" method="GET" action="/cat/update/{{$cat->id}}" >
                    <button type="submit" class="btnup">
                        {{ csrf_field() }}
                        <i class="fa fa-arrow-circle-o-up fa-2x" aria-hidden="true"></i>
                    </button>
                </form>
            </th>
        </tr>
        @endforeach
        </tbody>

    </table>
@endsection