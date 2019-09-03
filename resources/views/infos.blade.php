@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="card bg-info text-dark p-4">
        <form class="">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom :</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="aide email"
                    placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Prénom :</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Champ texte de plusieurs lignes</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Champ de chargement de fichier</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            </div>
            <br>


            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select custom-select-lg mb-3" id="inlineFormCustomSelect">
                <option selected>Choisir une option :</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <br>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                </div>
            </div>
            <br>


            <button type="submit" class="btn btn-success btn-lg font-weight-bold">Envoyer</button>
        </form>

    </div>






</div>
@endsection
