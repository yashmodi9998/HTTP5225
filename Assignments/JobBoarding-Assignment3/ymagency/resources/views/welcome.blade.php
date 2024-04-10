@extends('layouts.admin')
@section('content')
<div class="full-width-banner" style="background-image: url('img/banner.jpg');">
    <div class="overlay"></div> <!-- Overlay to create a semi-transparent background -->
    <div class="content">
        <h1>Discover Your Potential Today</h1>
        <a href="{{ url('/fieldjob') }}" class="btn btn-primary">Get Started</a>
    </div>
</div>


@endsection