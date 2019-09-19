@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    <a href="{{ asset('storage/'.$post->photo) }}"><img src="{{ asset('storage/'.$post->photo) }}"
                            class="responsive img-thumbnail" alt="Image"></a>

                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Commentaires</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @foreach($post->comments as $comment)

                    <b>
                        {{ $comment->user->name }}
                    </b>
                    <small>{{$comment->created_at->diffForHumans()}}</small>
                    <br>
                    <p>
                        {{ $comment->content }}
                    </p>
                    <br>
                    <hr>
                    @endforeach

                    @guest
                    Vous devez être connecté !
                    @else
                    <form action="{{ route('comments.store') }}" method="POST">

                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                        <div class="col-mb-12 mb-3 font-weight-bold">
                            <div>
                                <label for="contenu">Votre commentaire : </label>
                            </div>
                            <div>
                                <textarea name="content" id="content" style="width:100%"
                                    rows="5">{{ old('content') }}</textarea>
                            </div>
                        </div>
                        <div class="col-mb-12 mb-3">

                            <button type="submit" class="btn btn-success btn-lg">Ajouter votre commentaire</button>
                        </div>

                        {{--
                            $table->boolean('draft')->default(0);
                            $table->boolean('active')->default(0);
                            $table->enum('theme',['Symphony','Laravel','Wordpress']); --}}


                    </form>
                    @endguest

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
