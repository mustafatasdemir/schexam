@extends('layouts.app')

@section('content')

@unless (Auth::check())
  @include('includes.slider')
@endunless
@endsection
