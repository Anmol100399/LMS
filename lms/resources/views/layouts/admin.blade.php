<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel LMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Laravel LMS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('features') ? 'active' : '' }}" href="{{ url('/features') }}">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('pricing') ? 'active' : '' }}" href="{{ url('/pricing') }}">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container my-4">
        @yield('content')
    </div>
    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} Laravel LMS. All Rights Reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OFJmJKnPmGbYe1BDHz2Y9W3OY8Q7HlzSZTxwS73WEk5IgejBKo2nl+T89W1Yh2b8" crossorigin="anonymous"></script>
</body>
</html>
