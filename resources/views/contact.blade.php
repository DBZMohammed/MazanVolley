@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 d-flex flex-wrap">
    <div class="pageForm row text-dark p-5">
        <div class="col-12 text-center mb-5">
            <h2 class="formulaire font-weight-bold text-white">Comment nous contacter ?</h2>
        </div>


        <div class="col1 col-6 flex-wrap">
            <div>
                <h3 class="font-weight-bold text-white ">Appelez-nous !</h3>
                <br>
                <p class="contact"><i class="fas fa-phone"></i> <strong>TEL :</strong></p>
                <p class="contact">06.50.81.66.37 - Luc RICHAUD</p>
                <p class="contact">06.85.74.33.50 - Jean-Marie RATO (Trésorier)</p>
                <br>
                <br>
                <h3 class="font-weight-bold text-white">Rejoignez-nous tous les lundis soirs entre 20h30 et 22h30 !</h3>
                <br>
                <p class="contact"><i class="fas fa-map-marker-alt"></i> <strong>ADRESSE :</strong> 361 / 467 Chemin du
                    Bigourd - 84380 MAZAN </p>
            </div>

            <div class="flex-wrap">
                <iframe class="map1"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5734.723387081783!2d5.1168427099473694!3d44.05523938393171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb251cf855ce1eb02!2sCOSEC%20MAZAN!5e0!3m2!1sfr!2sfr!4v1568034265204!5m2!1sfr!2sfr"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="col2 col-6">
            <h3 class="font-weight-bold p-3 mb-3 text-white">Envoyez-nous un petit mot !</h3>
            <br>
            <form action="{{ url('/contact') }}" method="POST">
                {{ csrf_field() }}

                <div class="formulaire form-group">
                    <label>Nom :</label>
                    <input type="text" name="nom" class="form-control">
                </div>

                <div class="formulaire form-group">
                    <label class="formulaire">Prénom :</label>
                    <input type="text" name="prenom" class="form-control">
                </div>

                <div class="formulaire form-group">
                    <label class="formulaire">Email :</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="formulaire form-group">
                    <label class="formulaire">Message :</label>
                    <textarea name="content" class="form-control" cols="10" rows="10"></textarea>
                </div>

                <button class="btn btn-primary btn-lg font-weight-bold" type="submit">Envoyer</button>

            </form>

            <br>

            <div>
                <h3 class="font-weight-bold p-3 mb-3 text-white">Suivez l'actualité du club sur notre page Facebook : <a
                        href="https://fr-fr.facebook.com/pages/category/Sports-Club/Mazan-Volley-ball-1883689478318448/"
                        class="btn btn-facebook"><i class="fab fa-facebook-f"></i>acebook</a></h3>

            </div>

        </div>

    </div>
</div>





@endsection
