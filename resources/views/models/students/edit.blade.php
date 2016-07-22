@extends('layouts.admin.dashboard')


@section('content')


<h1 class="page-header custom-header">Edit Existing Exam Term</h1>

{{ Form::model($exam_term, array('route' => ['students.update', $exam_term], 'autocomplete' => 'off', 'method' => 'put')) }}
  @include('models.examterms.includes.form')
{{ Form::close() }}


@include('models.examterms.includes.script')
@endsection
