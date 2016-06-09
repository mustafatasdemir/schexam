<!-- Metadata -->
@include('includes.meta')
<!-- Page Specific Metadata -->
<meta name="keywords" content="">
<meta name="description" content="">

<!-- Title -->
<title>{{ trans('site.title') }}</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap_override.css') }}" />

<style type="text/css">
@font-face {
    font-family: Geometric;
    src: url('{{ URL::asset('css/fonts/geometric.ttf') }}');
}
</style>

<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Geometric';
    }

    .container {
        text-align: center;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>
