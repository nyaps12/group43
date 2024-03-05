@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Report')

@section('page-style')
@endsection


@section('content')
<div class="container">
  <h1>Vehicle Details Report</h1>
    <table class="table table-bordered">
      <thead class="bg-primary">

        <th>Status</th>
        <th>Speed</th>
        <th>Fuel Level</th>
        <th>Travel Time(HH:MM)</th>
        <th>Distance(km)</th>
        <th>Idling Time (HH:MM)</th>

      </thead>
      <tbody>
        <tr>

          <td>Active</td>
          <td>10</td>
          <td>25</td>
          <td>2:36</td>
          <td>55.95</td>
          <td>1:04</td>

        </tr>

      </tbody>
    </table>
</div>
@endsection
