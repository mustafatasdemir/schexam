@extends('layouts.admin.dashboard')

@section('content')

<style>
  #examterms-table { display: none; }
</style>

<h1 class="page-header custom-header">List Exam Terms</h1>
<div id="loading-overlay">
     <img class="loading-gif" src="{{ URL::asset('img/hourglass.gif') }}" alt="Loading" />
</div>

@include('models.examterms.includes.table')
@include('models.examterms.includes.script')

@endsection
