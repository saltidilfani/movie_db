<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
      <div class="container">
        <a class="navbar-brand fw-bold" href="/">Movie DB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          {{-- Left side --}}
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>
            @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('movies.create') }}">Input Movie</a>
              </li>
            @endauth
          </ul>

          {{-- Right side --}}
          <div class="d-flex align-items-center gap-3">
            {{-- Search form --}}
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            </form>

            {{-- Login / User Dropdown --}}
            @auth
              <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><span class="dropdown-item-text">{{ Auth::user()->email }}</span></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post" class="px-3">
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger w-100">Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
            @else
              <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
            @endauth
          </div>
        </div>
      </div>
    </nav>

    <div class="container my-3">
      @yield('content')
    </div>

    <div class="bg-success text-white text-center py-2">
      Copyright 2025 &copy; by Salti Dilfani | 2301093007
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
