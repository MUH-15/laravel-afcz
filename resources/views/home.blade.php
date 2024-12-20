@extends('master.layout')


@section('title')
Home
@endsection


@section('content')
<div class="container" style="padding-top: 100px;">
    <h1 class="text-center">Welcome to BeeLiquid</h1>
    <p class="text-center">Your ultimate destination for premium vaping products!</p>

    <!-- Promotional Banner -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="alert alert-info text-center">
                <strong>Special Offer!</strong> Get 20% off on your first order with code: FIRST20
            </div>
        </div>
    </div>

<div>
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif


            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


    <div id="carouselExampleAutoplaying" class="carousel slide shadow rounded-2"
        data-bs-ride="carousel">
        <div class="carousel-inner rounded-2">
            @foreach ($posts as $key => $post)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                @if ($post->image)
                <img src="{{ asset('images/posts/' . $post->image) }}" class="d-block w-100"
                    style="width: 400px; height: 400px; object-fit: cover;" alt="{{ $post->title }}">
                @else
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Placeholder Image">
                @endif
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row mt-4">
        @foreach ($posts as $post)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                @if ($post->image)
                <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @else
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection