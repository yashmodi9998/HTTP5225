@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-5 mt-3 mb-5">
                Applicants
            </h1>
        </div>
    </div>
    <div class="row">
    @foreach($users as $applicant)
    <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="#">
                        <img src="{{ $applicant ->  profile_img }}" class="card-img-top" alt="Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $applicant ->  name }}</h5>  
                        <p class="card-text">{{ $applicant ->  email }}</p>
                        <p class="card-text">{{ $applicant ->  phone }}</p>
                        <a href="{{ $applicant ->  id }}" class="btn btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
</div>
@endsection