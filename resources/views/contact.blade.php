@extends('master.layout')

@section('title')
Contact
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
            <h1>Contact Us</h1>
            <!-- <form action="{{ route('contact') }}" method="POST"> -->
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3">Send Message</button>
            <!-- </form> -->
        </div>
    </div>
</div>
@endsection