@extends('layouts.base')
@section('title', 'accueil')
@section('main')

    <h1>Nouveau chat</h1>

    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="/cat/insert">

            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Nom</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="text" name="name" class="form-control"
                                   placeholder="Nom">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label>Taille</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input class="form-control"  type="number" name="taille"
                                   placeholder="Taille">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="password">Poids</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">

                            </div>
                            <input type="number" name="poids" class="form-control"
                                    placeholder="poids">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label>Age</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="number" name="age" class="form-control"
                                   placeholder="Age">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label>Sexe</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <select class="form-control" name="gender">
                                @foreach ($genders as $gender)
                                <option value="{{{ $gender->id}}}">{{{ $gender->gender}}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label>Couleur</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <select multiple class="form-control multi" name="color[]" value="['multiple' => true]">
                                @foreach ($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->color }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Inserer un chat</button>
                </div>
            </div>
        </form>
    </div>



@endsection