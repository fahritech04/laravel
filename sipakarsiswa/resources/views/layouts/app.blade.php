<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title')</title>

 {{-- CDN Bootstrap --}}
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">

</head>
<body>

 {{-- Navbar --}}
 <header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

    </div>
  </div>
</header>

 @yield('content')
</body>
</html>