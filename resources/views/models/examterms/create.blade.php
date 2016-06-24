@extends('layouts.admin.dashboard')


@section('content')


<h1 class="page-header custom-header">Create New Exam Term</h1>

{{ Form::open(array('route' => 'examterm.store', 'autocomplete' => 'off')) }}
  @include('models.examterms.includes.form')

{{ Form::close() }}


@include('models.examterms.includes.script')
@endsection
