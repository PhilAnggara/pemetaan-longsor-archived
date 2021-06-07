<nav class="navbar navbar-expand-lg navbar-dark bg-light shadow">
  <a class="navbar-brand" href="{{ route('home') }}">Pemetaan Daerah Rawan Longsor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      @guest
        <a class="btn btn-default px-3 rounded-pill btn-prim" href="{{ url('login') }}">Masuk</a>
      @endguest
      @auth
        @if (auth()->user()->roles == 'ADMIN')
          <a class="btn btn-default px-3 rounded-pill btn-prim" href="{{ url('admin') }}">Admin</a>
        @else
          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-default px-3 rounded-pill btn-outline-secondary" type="submit">Keluar</button>
          </form>
        @endif
      @endauth
    </div>
  </div>
</nav>