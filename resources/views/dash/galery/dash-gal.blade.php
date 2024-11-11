@extends('layouts.dash')
@section('title', 'Galleries')

<div class="container mt-5 col-md-10" id="tabel">
    <h2 class="text-center mb-4">Gallery List</h2>
    <hr class="featurette-divider">
    <a href="{{url ('dashboard/galleries/create')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-circle-up"></i> Posting </a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Author</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="img-thumbnail" style="width: 100px;">
                    </td>
                    <td>{{ $gallery->author }}</td>
                    <td>{{ $gallery->title }}</td>
                    <td>{{ Str::limit($gallery->body, 50) }}</td>
                    <td>
                        @if($gallery->user_id == auth()->user()->id || auth()->user()->isAdmin())
                        <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        @endif
                        @auth
                        @if(auth()->user()->isAdmin() || $gallery->user_id === auth()->id())
                            <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" style="display:inline;">
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
