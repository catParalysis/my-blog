<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Allo {{Auth::user()->name ?? 'bel inconnu'}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @guest
            <a class="nav-link" href="{{ route('auth.create') }}">Registration</a>
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        @else
            <a class="nav-link" href="{{ route('blog.index') }}">Blogs</a>
            <a class="nav-link" href="{{ route('user.list') }}">Utilisateurs</a>
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        @endguest  
      </div>
    </div>
  </div>
</nav>
    <div class="container">
    @if(session("success"))
        
   
    <div class="row justify-content-center mt-1 mb-1">
        <div class="col-md-6 mt-1 mb-1">
            <div class="alert alert-success text-center"> {{ session("success")}}</div>
        </div>
    </div>
    @endif
        @yield('content')
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>