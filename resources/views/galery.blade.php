@extends('layouts.main')
@section('title', 'Galleries')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}

    <div class="carousel-inner">
        @foreach ($galleries as $index => $gallery)
        <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{ asset('images/' . $gallery->image) }}" class="d-block w-100" alt="Slide {{ $index + 1 }}" style="object-fit: cover; height: 100vh;">
            <div class="carousel-caption text-start rounded mt-3" >
              {{-- <h1>{{ $gallery->title }}</h1>
              <h5>By: {{$gallery->author}}</h5>
              <h5>{{ Str::limit($gallery->body, 100) }}</h5> --}}
              <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="top: 0; bottom: 0; left: 0; right: 0;">
                <a href="#card" class="btn btn-lg btn-primary">Show <i class="fa-solid fa-arrow-down"></i></a>
              </div>
            </div>
        </div>
        @endforeach
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
        <h2 class="text-center"> <span  class="text-body-secondary">Galleries <i class="fa-solid fa-images"></i></span></h2>
        @auth
        <a href="{{url ('dashboard/galleries/create')}}" class="btn btn-primary mb-4 float-end"><i class="fa-solid fa-plus"></i></a>
        @endauth
        <h5 class="text-center text-body-secondary"><i class="fa-regular fa-image" id="card"></i> Abadikan Moment Anda Dalam Halaman ini! <i class="fa-regular fa-image"></i></h5>
        <hr class="featurette-divider">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-3" >
            @foreach ($galleries as $gallery)
            <div class="col col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $gallery->image) }}" class="card-img-top" alt="image {{ $gallery->id }}" style="object-fit: cover; height: 250px; cursor:pointer;" data-bs-toggle="modal" data-bs-target="#imageModal{{ $gallery->id }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $gallery->title }}</h5>
                        {{-- <p class="card-text">By: {{$gallery->author}}</p>
                        <p class="card-text">{{ Str::limit($gallery->body, 100) }}</p> --}}
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="imageModal{{ $gallery->id }}" tabindex="-1" aria-labelledby="imageModal{{ $gallery->id }}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModal{{ $gallery->id }}Label">Galery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('images/' . $gallery->image) }}" class="img-fluid mb-3" alt="Article Image {{ $gallery->id }}" style="width: 100%; height: auto;">
                            <p>By: {{$gallery->author}}</p>
                            <hr>
                            <p>{{ $gallery->body }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    @auth
                                        <a href="{{ route('gallery.edit', $gallery->id) }}" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    @endauth
                                </div>
                                <small class="text-body-secondary">{{ $gallery->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


