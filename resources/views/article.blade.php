@extends('layouts.main')
@section('title', 'Articles')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($articles as $article )
        <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{ asset('images/' . $article->foto) }}" class="d-block w-100" alt="Slide 1" style="object-fit: cover; height: 100vh;">
            <div class="container">
              <div class="carousel-caption text-center d-flex flex-column justify-content-center align-items-center" style="top: 200x ; bottom: 0; left: 0; right: 0; backdrop-filter: blur(3px); background: rgba(0, 0, 0, 0.400);">
                <h2>{{ $article->title }}</h2>
                <p>{{ Str::limit($article->body, 100) }}</p>
                {{-- <p><a class="btn btn-lg btn-primary" href="#arti">View <i class="fa-solid fa-arrow-down"></i></a></p> --}}
                    <a href="#arti" class="btn btn-lg btn-primary">View <i class="fa-solid fa-arrow-down"></i></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <h2 class="text-center">
            <span class="text-body-secondary">
                Articles <i class="fa-solid fa-newspaper"></i>
            </span>
        </h2>
        @auth
        <a href="{{url ('dashboard/articles/create')}}" class="btn btn-primary mb-4 float-end"><i class="fa-solid fa-plus"></i></a>
        @endauth
        <h5 class="text-center text-body-secondary"><i class="fa-regular fa-newspaper"></i> Mari tuliskan informasi dan sebarkan berita baik hari ini! <i class="fa-regular fa-newspaper"></i></h5>
        <hr class="featurette-divider" id="arti">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($articles as $article)
            <div class="col" >
                <div class="card shadow-sm">
                    <a href="{{ route('article.view', $article->id) }}" class="text-dark text-decoration-none"><img src="{{ asset('images/' . $article->foto) }}" class="card-img-top" alt="image {{ $article->id }}" style="width: 100%; height: 250px; object-fit: cover;"></a>
                    <div class="card-body">
                        <a href="{{ route('article.view', $article->id) }}" class="text-dark text-decoration-none"><h4>{{ Str::limit($article->title, 20) }}</h4></a>
                        <p>By: {{$article->author}}</p>
                        <hr>
                        <p>{{ Str::limit($article->desc, 60) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                {{-- @auth
                                    @if(auth()->user()->id == $article->user_id )
                                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    @endif
                                @endauth --}}
                            </div>
                            <small class="text-body-secondary">{{ $article->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


