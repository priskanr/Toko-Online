<ul class="navbar-nav ml-auto d-none d-lg-flex">
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture"/>
        Hi, {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href={{ route('dashboard') }}>Dashboard</a>
            <a class="dropdown-item" href={{ route('dashboard-settings-account') }}>Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/">Logout</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link d-inline-block mt-2" href="#">
        <img src="/images/icon-cart-empty.svg" alt="" />
        </a>
    </li>
    </ul>
    <!-- Mobile Menu -->
    <ul class="navbar-nav d-block d-lg-none mt-3">
    <li class="nav-item">
        <a class="nav-link" href="#">
        Hi, Angga
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-inline-block" href="#">
        Cart
        </a>
    </li>
</ul>
