@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center bg-info text-white">
                <div class="card-header  font-weight-bold text-dark">Ajouter un licencié</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- Formulaire --}}
                    <form action="{{ route('pages.store') }}" method="POST">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @csrf
                            <div class="col-mb-12 mb-3 font-weight-bold text-dark">
                                <div>
                                    <label for="title">Nom : </label>
                                </div>
                                <div class="font-size-500">
                                        <input value="{{ old('title') }}" type="text" name="title">
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3 font-weight-bold text-dark">
                                <div>
                                    <label for="title">Prénom : </label>
                                </div>
                                <div class="font-size-500">
                                        <input value="{{ old('title') }}" type="text" name="title">
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3 font-weight-bold text-dark">
                                <div>
                                    <label for="title">Age : </label>
                                </div>
                                <div class="font-size-500">
                                        <input value="{{ old('title') }}" type="text" name="title">
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3 font-weight-bold text-dark">
                                <div>
                                    <label for="title">Adresse : </label>
                                </div>
                                <div class="font-size-500">
                                        <input value="{{ old('title') }}" type="text" name="title">
                                </div>
                            </div>


                            <div class="col-mb-12 mb-3 font-weight-bold text-dark">
                                <div>
                                    <label for="slug">Slug du licencié : </label>
                                </div>
                                <div class="font-size-500">
                                        <input value="{{ old('slug') }}" type="text" name="slug">
                                </div>
                            </div>

                            <div class="custom-control custom-checkbox text-dark">
                                <input type="checkbox" name="draft">
                                Cocher si c'est un nouveau licencié.
                              </div>
                            <div class="custom-control custom-checkbox text-dark">
                                <input type="checkbox" name="active" checked>
                                Cocher pour ajouter sur le site.
                              </div>


                                <br>

                                <hr>
                            <div class="col-mb-12 mb-3 font-weight-bold text-dark">
                                <div>
                                    <label for="contenu">Commentaire : </label>
                                </div>
                                <div>
                                    <textarea name="content" id="content" style="width:100%" rows="5">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3">

                            <button type="submit" class="btn btn-light btn-lg font-weight-bold">Envoyer</button>
                            </div>

                            {{--
                            $table->boolean('draft')->default(0);
                            $table->boolean('active')->default(0);
                            $table->enum('theme',['Symphony','Laravel','Wordpress']); --}}


                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
