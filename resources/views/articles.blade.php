@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <hr>
                {{ $posts->links() }}
            <hr>
                @foreach($categories as $category)
                   <a class="btn btn-info mb-3 p-3" href="{{ route('category',['title' => $category->title]) }}">{{ $category->title }}</a>
                @endforeach

            @foreach($posts as $post)
            <div class="card">
                <div class="card-header p-2">
                    <a class="navbar-brand text-dark" href=" {{ route('article',['id' => $post->id]) }}">
                        {{ $post->title }}
                    </a>
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
