@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <hr>
                {{ $posts->links() }}
            <hr>
                <div class="text-center">
                    @foreach($categories as $category)
                       <a class="btn btn-info mb-3 p-3" href="{{ route('category',['title' => $category->title]) }}">{{ $category->title }}</a>
                    @endforeach

                </div>

            @foreach($posts as $post)
            <div class="card">
                <div class="card-header p-2">
                    <a class="navbar-brand text-dark" href=" {{ route('article',['id' => $post->id]) }}">
                        {{ $post->title }}
                    </a>

                </div>
                <div class="card-body row">
                    <div class="col-4">
                        <a href="{{ asset('storage/'.$post->photo) }}"><img src="{{ asset('storage/'.$post->photo) }}"  class="responsive img-thumbnail" alt="Image"></a>
                    </div>
                    <div class="col-8 d-flex flex-wrap align-content-center">
                        {{ $post->content }}
                        <br>
                        <hr>
                        <a href="{{ route('article',['id' => $post->id]) }}"><button type="button" class="btn btn-success">En savoir plus</button></a>

                    </div>
                </div>
            </div>
            <br>
            @endforeach
            <hr>
            {{ $posts->links() }}
        <hr>
        </div>
    </div>
</div>
@endsection
