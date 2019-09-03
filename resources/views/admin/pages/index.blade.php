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
            <a class="btn btn-info p-2 mb-4" href="{{ route('pages.create') }}">Créer une nouvelle entrée</a>
            <table class="table table-hover table-bordered text-center bg-white"> 

                <hr>
                    {{ $pages->links() }}
                <hr>

                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>TITRE</th>
                        <th>DATE DE CREATION</th>
                        <th>DATE DE MODIFICATION</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                @foreach($pages as $page)
                <tr>
                    <td class="align-middle">{{ $page->title }}</td>
                    <td class="align-middle">{{ $page->created_at->format('d/m/Y H:i:s') }}</td>
                    <td class="align-middle">{{ $page->updated_at->format('d/m/Y H:i:s') }}</td>

                    <td class="align-middle">
                        <a class="btn btn-success btn-block p-2" href="{{ route('pages.edit', ['id'=>$page->id]) }}">Modifier</a>

                        <form action="{{ route('pages.destroy', ['id'=>$page->id]) }}" method="POST">
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
