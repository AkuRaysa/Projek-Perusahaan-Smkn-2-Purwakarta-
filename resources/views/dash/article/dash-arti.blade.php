@extends('layouts.dash')
@section('title', 'Articles')

<div class="container mt-5 col-md-10" id="tabel">
    <h2 class="text-center mb-4">Articles List</h2>
    <hr class="featurette-divider">
    <a href="{{url ('/articles/create')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-circle-up"></i> Posting </a>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('images/' . $article->foto) }}" alt="{{ $article->title }}" style="width: 80px; height: 60px; object-fit: cover;"></td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->author }}</td>
                    <td>{{ Str::limit($article->body, 70) }}</td>
                    <td>
                        @if($article->user_id == auth()->user()->id || auth()->user()->isAdmin() )
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="{{ route('article.view', $article->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-magnifying-glass"></i> View</a>
                        @endif

                    @auth
                        @if(auth()->user()->isAdmin() || $article->user_id === auth()->id())
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                    <i class="fa-solid fa-xmark"></i> Delete
                                </button>
                            </form>
                            @else
                        <p class="text-muted">(Postingan tersebut <br>punya orang lain)</p>
                        @endif
                    @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
