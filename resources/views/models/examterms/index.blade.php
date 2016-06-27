@extends('layouts.admin.dashboard')

@section('content')

<h1 class="page-header custom-header">List Exam Terms</h1>

<li><a href="{{ route('examterm.edit', 5) }}">Profile</a></li>

@include('models.examterms.includes.table')
<button class="show">Open</button>
@include('models.examterms.includes.script')

<script type="text/javascript">



</script>
@endsection
