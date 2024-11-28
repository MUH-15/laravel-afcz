@extends('master.layout')

@section('content')
<div class="bg-light">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="col-md-8">
                <div class="card p-4 shadow">
                    <h1>{{ $post->title }}</h1>
                    <p>Kategori: {{ $post->category->name }}</p>
                    @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    @else
                    <p>No image available</p>
                    @endif
                    <p>{{ $post->body }}</p>
                    <a class="btn btn-primary mb-3" href="javascript:history.back()">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection