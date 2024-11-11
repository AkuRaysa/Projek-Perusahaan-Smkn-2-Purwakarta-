@extends('layouts.main')
@section('title', 'Single Article')
    {{-- <a href="{{url('article')}}" class="btn btn-primary mt-3" style="margin-left: 100px;"><i class="fa-solid fa-arrow-left"></i> Back</a> --}}

<div class="container my-5 justify-content-center mt-4" style="padding-top:5px;">
    <div class="card mb-4 shadow-sm mt-5">
        <img src="{{ asset('images/' . $article->foto) }}" class="card-img-top" alt="image {{ $article->id }}" style="width: 100%; height: 100%; object-fit: cover;">
        <h6 class="text-body-secondary text-end mt-2" style="margin-right: 20px">{{ $article->created_at->diffForHumans() }}</h6>
        <div class="card-body">
            <h1>{{ $article->title }}</h1>
            <p class="text-muted">By: {{ $article->author }}</p>
            <hr>
            <p class="lead">{{ $article->body }}</p>
        </div>
    </div>
</div>





