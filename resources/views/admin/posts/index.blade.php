@extends('layouts.app')

@section('content')
    <div class="container-fluid p-5 m-auto">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <a class="btn btn-info p-2 mb-4" href="{{ route('posts.create') }}">Créer un article</a>
            <table class="table table-hover table-bordered text-center bg-white">

                <hr>
                    {{ $posts->links() }}
                <hr>

                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>TITRE</th>
                        <th>CATEGORIE</th>
                        <th>PHOTOS</th>
                        <th>DATE DE CREATION</th>
                        <th>DATE DE MODIFICATION</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                @foreach($posts as $post)
                <tr>
                    <td class="align-middle">{{ $post->title }}</td>
                    {{-- <td class="align-middle">{{ $page->photo }}</td> --}}
                    <td class="align-middle">

                        @if($post->category)
                            {{ $post->category->title }}
                        @endif
                    </td>
                    <td class="align-middle">{{ $post->created_at->diffForHumans() }}</td>
                    <td class="align-middle">{{ $post->updated_at->format('d/m/Y H:i:s') }}</td>

                    <td>
                        <a class="btn btn-success btn-block p-2" href="{{ route('posts.edit', ['id'=>$post->id]) }}">Modifier</a>

                        <form action="{{ route('posts.destroy', ['id'=>$post->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-block mt-2" type="submit">Supprimer</button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
