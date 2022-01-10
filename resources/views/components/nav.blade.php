<nav class="navbar navbar-expand-lg nav p-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}"><i class="fas fa-book-open fa-2x" style="color: #fef5ef"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-list">
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == 'homepage') ? 'active nav-active': ''}}" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == 'index') ? 'active nav-active': ''}}" aria-current="page" href="{{route('library.index')}}">Librerie</a>
          </li>
          

          {{-- personalizzazione vista se si è loggati o meno --}}
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="nav-item nav">
                <a class="nav-link {{(Route::currentRouteName() == 'logout') ? 'active': ''}}" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a>
                                
              {{-- form-logout --}}
              <form action="{{route('logout')}}" method="POST" style="display: none;" id="form-logout">@csrf</form>

              <li><hr class="dropdown-divider"></li>
              <li class="nav-item nav">
                <a class="nav-link {{(Route::currentRouteName() == 'library.create') ? 'active nav-active': ''}}" aria-current="page" href="{{route('library.create')}}">Inserisci Libreria</a>
              </li>
            </ul>
              </li>

          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto
            </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="nav-item nav">
            <a class="nav-link {{(Route::currentRouteName() == 'register') ? 'active': ''}}" href="{{route('register')}}">Registrati</a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li class="nav-item nav">
            <a class="nav-link {{(Route::currentRouteName() == 'login') ? 'active': ''}}" href="{{route('login')}}">Login</a>
          </li>
        </ul>
          @endauth

      </div>
    </div>
  </nav>