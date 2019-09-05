@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="card bg-info text-dark p-4">
        <form class="">
            <div class="form-group">
                <label for="exampleInputNom">Nom :</label>
                <input type="text" class="form-control" aria-describedby="aide email" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="exampleInputPrenom">Prénom :</label>
                <input type="text" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Date de naissance :</label>
                <input type="text" class="form-control" placeholder="03/09/2019">
            </div>
            <br>
            <div class="custom-file">
                <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choisir le fichier :</label>
            </div>
            <br>
            <div class="form-group">

                <a href="{{ asset('/telechargement/bulletininscription.pdf') }}">Télécharger le fichier</a>
            </div>

            <br>
            <br>

            <div class="form-group">
                <label for="exampleTextarea">Champ texte de plusieurs lignes</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
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
                    <label class="custom-control-label" for="customControlAutosizing">Se souvenir de mes préférences :</label>
                </div>
            </div>
            <br>


            <button type="submit" class="btn btn-success btn-lg font-weight-bold">Envoyer</button>
        </form>

    </div>






</div>
@endsection
