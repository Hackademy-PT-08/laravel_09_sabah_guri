<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          @if (!auth()->check())

            <li class="nav-item">
              <a class="nav-link" href="/login">Accedi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrati</a>
            </li>

          @else

            <li class="nav-item">
              <a class="nav-link" href="{{route('profilo')}}">Profilo</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{route('articles-index')}}">I nostri prodotti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('aggiungi')}}">Aggiungi un nuovo articolo</a>
            </li>
            {{-- bottone di log out --}}
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button class="btn btn-sm btn-secondary">Esci</button>
              </form>
            </li>

          @endif

        </ul>
      </div>
    </div>
  </nav>