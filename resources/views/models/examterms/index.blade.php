@extends('layouts.admin.dashboard')

@section('content')

<li><a href="{{ route('examterm.edit', 5) }}">Profile</a></li>

@foreach ( $exam_terms as $exam_term)
{{$exam_term->name}}
@endforeach

@endsection
