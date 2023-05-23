

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>comics @yeld('page_title', 'Welcome')</title>
  
  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  
    @include('partials.header')
  
  <main class="bg-light">
    @yield('content')
  </main>

    @include('partials.footer')
 
  
</body>

</html>

