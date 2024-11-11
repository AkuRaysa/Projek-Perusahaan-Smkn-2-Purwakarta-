<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><h2>Enjoy</h2></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style="margin-left: 160px">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/') }}">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('galery') }}">Galleries</a>
        </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('article') }}">Articles</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto text-center">
          @guest
            <li class="nav-item">
              <a href="{{ route('login') }}" class="btn btn-primary">Login <i class="fa-solid fa-right-to-bracket"></i></a>
            </li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white btn btn-primary" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.update') }}"><i class="fa-regular fa-user"></i> Profile</a></li>
                @if(auth()->user()->isAdmin())
                  <li><a class="dropdown-item" href="{{ url('dashboard') }}"><i class="fa-solid fa-warehouse"></i> Dashboard</a></li>
                @endif
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" type="submit"><i class="fa-solid fa-arrow-left"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @endguest
        </ul>
      </div>
    </div>
</nav>
