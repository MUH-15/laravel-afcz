@extends('master.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="margin-top: 100px; margin-bottom: 100px;">

            <div class="card">
                <div class="card-header bg-dark text-light text-center">Categories</div>
                <div class="m-3 justify-content-between">
                    @auth
                    <form method="GET" action="{{ route('categories.index') }}">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search users">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary my-3">Tambah Kategori</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Created At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('categories.show', $category) }}"
                                        class="btn btn-sm btn-primary m-1">View</a>
                                    <a href="{{ route('categories.edit', $category) }}"
                                        class="btn btn-sm btn-warning m-1">Edit</a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger m-1"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->links() }}
                @else
                <p>You are not logged in. Please <a href="{{ route('signin') }}">log in</a> to view categories.</p>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection