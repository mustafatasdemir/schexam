@extends('layouts.admin.dashboard')

@section('content')

<style>
  #students-table { display: none; }
</style>

<h1 class="page-header custom-header">List Students</h1>
<div id="loading-overlay">
     <img class="loading-gif" src="{{ URL::asset('img/hourglass.gif') }}" alt="Loading" />
</div>

@include('models.students.includes.table')

@include('models.students.includes.script')

@endsection
