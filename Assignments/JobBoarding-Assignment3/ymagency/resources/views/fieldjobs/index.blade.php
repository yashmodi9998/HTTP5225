@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-5 mt-3 mb-5">
                Available Jobs
            </h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Company</th>
                    <th scope="col">Location</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
        @foreach($jobs as $job)
        <tr>
            <td scope="row">#</td>
            <td><a href="#">{{ $job ->  title }} </a></td>
            <td> {{ $job ->  description }}</td>
            <td>{{ $job ->  company }}</td>
            <td>{{ $job ->  location }}</td>
            <td>{{ $job ->  salary }} CAD</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection