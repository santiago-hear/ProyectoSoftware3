<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <span class="navbar-brand">Ucaldas</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('category.index') }}">Categorías</a>
        <a class="nav-link" href="{{ route('post.index') }}">Publicaciones</a>
      </div>
    </div>
  </div>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </li>
  </ul>
</nav>