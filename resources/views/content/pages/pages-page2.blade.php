@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Location')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
</head>
<body>
    <div class="container">

  <button class="btn btn-primary" data-bs-toggle="collapse" href="#driver1" role="button" aria-expanded="false" aria-controls="driver1">Driver 1</button>

  <button class="btn btn-primary" data-bs-toggle="collapse" href="#driver2" role="button" aria-expanded="false" aria-controls="driver2">Driver 2</button>

  <button class="btn btn-primary" data-bs-toggle="collapse" href="#driver3" role="button" aria-expanded="false" aria-controls="driver3">Driver 3</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="driver1">
      <div class="card card-body">
        Driver location 1
      </div>
    </div>
  </div>


  <div class="col">
    <div class="collapse multi-collapse" id="driver2">
      <div class="card card-body">
        Driver location2
      </div>
    </div>
  </div>

  <div class="col">
    <div class="collapse multi-collapse" id="driver3">
      <div class="card card-body">
        Driver location3
      </div>
    </div>
  </div>
</div>
    </div>

</body>
</html>
@endsection
