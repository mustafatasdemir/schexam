<!doctype html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body id="app-layout">
  <header>
    @include('includes.header')
  </header>
    <div id="page-wrap">
      @include('includes.navbar')


      @foreach ( $students as $student)
        {{$student->stateID}}
      @endforeach

      @include('includes.slider')

      <div>

        @yield('content')

      </div>

      <footer id="bottom_footer">
        @include('includes.footer')
      </footer>
    </div>
</body>
</html>
