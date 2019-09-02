@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center bg-info text-white">
                <div class="card-header font-weight-bold">EDITION D'UNE PAGE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- Formulaire --}}
                    <form action="{{ route('pages.update', ['id' => $page->id]) }}" method="POST">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @method('PUT')
                            @csrf
                            <div class="col-mb-12 mb-3 font-weight-bold">
                                <div>
                                    <label for="title">Nom de la page : </label>
                                </div>
                                <div class="font-size-500">
                                    <input class="form-control" value="@if(old('title')) {{ old('title') }} @else {{ $page->title }} @endif"
                                        type="text" name="title">
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3 font-weight-bold">
                                <div>
                                    <label for="slug">Slug de la page : </label>
                                </div>
                                <div class="font-size-500">
                                    <input class="form-control" value="@if(old('slug')) {{ old('slug') }} @else {{ $page->slug }} @endif"
                                        type="text" name="slug">
                                </div>
                            </div>
                            <br>
                            <div class="custom-control custom-checkbox">
                                    <input @if(old('draft')||($page->draft)) checked="checked" @endif type="checkbox" name="draft" >
                                    Ceci est un brouillon !
                                  </div>
                                <div class="custom-control custom-checkbox">Actif :
                                    <input @if(old('active')||($page->active)) checked="checked" @endif type="checkbox" name="active">
                                    Cocher si visible sur le site
                                  </div>

                                    <br>


                            <div class="col-mb-12 mb-3 font-weight-bold">
                                <br>
                                <div>
                                    <label for="contenu">Contenu de la page : </label>
                                </div>
                                <div>
                                    <textarea name="content" id="content" style="width:100%" rows="5"> @if(old('content')) {{ old('content') }} @else {{ $page->content }} @endif </textarea>
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3">

                            <button type="submit" class="btn btn-light btn-lg font-weight-bold">Envoyer</button>
                            </div>


                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
