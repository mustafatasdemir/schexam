@extends('layouts.admin.dashboard')


@section('content')


<h1 class="page-header custom-header">Edit Existing Exam Term</h1>

{{ Form::open(array('route' => ['examterm.update', $exam_term], 'autocomplete' => 'off')) }}
  @include('models.examterms.includes.form')
{{ Form::close() }}

{{$exam_term->name}}


@include('models.examterms.includes.script')
@endsection
