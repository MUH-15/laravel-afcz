@extends('master.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="card">
                <div class="card-header bg-dark text-light text-center">Daftar Postingan</div>
                <div class="m-3 justify-content-between">
                    @auth
                    <form method="GET" action="{{ route('posts') }}">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search users">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary my-3">Tambah Postingan</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Created At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    @if ($post->image)
                                    <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}"
                                        class="img-thumbnail" width="100">
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{ $post->created_at->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post) }}"
                                        class="btn btn-sm btn-primary m-1">View</a>
                                    <a href="{{ route('posts.edit', $post) }}"
                                        class="btn btn-sm btn-warning m-1">Edit</a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger m-1"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $posts->links() }}
                @else
                <p>You are not logged in. Please <a href="{{ route('signin') }}">log in</a> to view categories.</p>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection