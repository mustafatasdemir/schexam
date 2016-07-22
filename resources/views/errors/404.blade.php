<!doctype html>
<html lang="en">
<head>
    @include('includes.error.404.head')
</head>
<body id="app-layout">
<header>
    @include('includes.header')
</header>
<div>
  <div class="page_overlay">
      <div class="loader-inner ball-pulse">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div class="wrap4002 animated fadeIn">
      <div class="row-flex">
        <div class="messge400">
          <h1><span>{{ trans('error.404') }}</span> <br>
          {{ trans('error.server_error') }}</h1>
          <p>{{ trans('error.error_detail') }} </p>
        </div>
      </div>
      <div class=" cloudWrapper">
        <div class="cloud cloud-1"><img src="{{ URL::asset('img/error/404/cloud-1.png') }}" alt=""></div>
        <div class="cloud cloud-2"><img src="{{ URL::asset('img/error/404/cloud-2.png') }}" alt=""></div>
        <div class="cloud cloud-4"><img src="{{ URL::asset('img/error/404/cloud-4.png') }}" alt=""></div>
      </div>
      <div class="waterflow">
        <div class="charecter-5">
          <div class="charecter-5anim row-flex"><div class="eye5"><img src="{{ URL::asset('img/error/404/eye-5.gif') }}" alt=""></div><img src="{{ URL::asset('img/error/404/charecter-5.png') }}" alt=""></div>
          <div class="fish"><a href="{{ url('/') }}"><img src="{{ URL::asset('img/error/404/fish.png') }}" alt=""></a>
            <span class="bubble bubble-1"><img src="{{ URL::asset('img/error/404/buble-1.png') }}" alt=""></span>
            <span class="bubble bubble-2"><img src="{{ URL::asset('img/error/404/buble-1.png') }}" alt=""></span>
            <span class="bubble bubble-3"><img src="{{ URL::asset('img/error/404/buble-1.png') }}" alt=""></span>
          </div>
        </div>
      </div>
    </div>
</div>
@include('includes.error.404.footer')
</body>
</html>
