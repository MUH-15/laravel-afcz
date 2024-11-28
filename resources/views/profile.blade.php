@extends('master.layout')

@section('title')
User Profile
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
            <h1>User Profile</h1>
            <div class="profile-info">
                <h2>Name: John Doe</h2>
                <p>Email: john.doe@example.com</p>
                <p>Bio: Web developer with a passion for creating interactive applications.</p>
            </div>
            <button class="btn btn-primary">Edit Profile</button>
        </div>
    </div>
</div>
@endsection