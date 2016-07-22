<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body id="app-layout">
<header>
    @include('includes.header')
</header>
<div class="container">
	  <div id="page-wrap">
      @include('includes.navbar')


    <div>

            @yield('content')

    </div>

    <footer id="bottom_footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
