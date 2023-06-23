<nav class="navbar">
    <h1 class="logo">
        <a href="/">LokaArt</a>
      </h1>
    <ul class="menu">
        <li><form action="/">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('user'))
            <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group justify-content-center">
                <input type="text" class="form-control" placeholder="search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>                      
        </form></li>
        <li><a href="" class="active"></a></li>
        <li><a href="/" >New Arrivals</a></li>
        <li><a href="/cekongkir" >Cek Ongkir</a></li>
        <li><a href="{{ route('checkout') }}"><i class="fa-solid fa-cart-shopping"></i></a></li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
                <a href="/dashboard">Account</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
            </li>
          </ul>
        </li>
        @else
        <li><a href="/login"><i class="bi bi-box-arrow-right"></i></a></li>
        @endauth
    </ul>
    <div class="menu-btn">
        <i class="fa fa-bars"></i>
    </div>
</nav>
