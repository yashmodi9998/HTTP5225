@extends('layouts.admin');
@section('content')
<div class="row">
<div class="col">
    <h1 class="display-2">
        View All Students
    </h1>
</div>
</div>
<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-title">
               <h2> {{ $student ->  fname }}  {{ $student ->  lname }}</h2>
            
            </div>
            <div class="card-body">
            <p>{{ $student ->  email }}</p>

         
            </div>
        </div>
    </div>
</div>
@endsection