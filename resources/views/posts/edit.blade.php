@extends('master.layout')
@section('content')

<div class="bg-light">
    <div class="container">
        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="col-md-16">
                <div class="card p-4 shadow">
                    <h1>Edit Postingan</h1>
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select class="form-select" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected'
                                    : ''
                                    }}>{{
                                    $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Isi</label>
                            <textarea class="form-control" id="body" name="body" rows="3">{{ $post->body }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}"
                                class="img-thumbnail mt-2" width="200">
                            @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection