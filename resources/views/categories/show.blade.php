@extends('master.layout')
@section('content')

<div class="bg-light">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px;">
            <div class="col-md-8">
                <div class="card p-4 shadow">
                    <h1>{{ $category->name }}</h1>
                    <p>Slug: {{ $category->slug }}</p>
                    <a class="btn btn-primary mb-3" href="javascript:history.back()">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection