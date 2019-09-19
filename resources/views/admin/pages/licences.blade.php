@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div id="licence" class="card text-dark p-4">
        <form action="{{ route('licences') }}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputNom">Nom :</label>
                <input type="text" class="form-control" aria-describedby="aide email" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPrenom">Prénom :</label>
                <input type="text" class="form-control" placeholder="Prénom" required>
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Date de naissance :</label>
                <input type="text" class="form-control" placeholder="03/09/2019" required>
            </div>
            <div class="form-group">
                <label for="exampleInputAdresse">Adresse :</label>
                <input type="text" class="form-control" placeholder="9 Rue des platanes" required>
            </div>
            <div class="form-group">
                <label for="exampleInputCodePoste">Code postal :</label>
                <input type="text" class="form-control" placeholder="84200" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Numéro de téléphone :</label>
                <input type="text" class="form-control" placeholder="06.01.02.03.04" required>
            </div>
            <br>
            <div class="custom-file justify-content-center">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choisir le fichier :</span>
                    <input name="photo" type="file" multiple>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="form-group">
                <label for="exampleTextarea">Commentaires :</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg font-weight-bold">Envoyer</button>
        </form>

    </div>






</div>
@endsection
