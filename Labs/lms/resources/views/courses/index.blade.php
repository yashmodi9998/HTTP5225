@extends('layouts.admin')
@section('content')
<div class="container">
     @foreach ($courses as $course)
     <h1>{{$course -> name}}</h1>
     <h6>{{$course -> courseID}}</h6>
     <hr class="mb-5">
     @endforeach
</div>
@endsection