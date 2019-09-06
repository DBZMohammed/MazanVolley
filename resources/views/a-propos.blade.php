@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h2 class=" text-center text-dark">Vous êtes sur la page officielle du M.V.B !</h2>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/Background/Volleyball_ball1.jpg" alt="1er slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./img/Background/Volleyball_ball2.jpg" alt="2ème slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./img/Background/Volleyball_ball3.jpg" alt="3ème slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./img/Background/Volleyball_ball4.jpg" alt="4ème slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <span class="text-dark"> Le plaisir du sport collectif... </span>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
