<div class="container mb-3">
    <div class="card">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images') }}/NERD.png" alt="Bootstrap" width="40" height="40"
                        style="opacity: 0.8;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Wikipedia
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('wiki.item.index') }}">Buku</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('wiki.map.index') }}">Penulis</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Community
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">WhatsApp</a></li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('char.index') }}">Sembarangs</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Test</a>
                        </li> --}}
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">SIGN UP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-danger" href="{{ route('login') }}" role="button">
                                        SIGN IN
                                        <i class="fa fa-sign-in"></i>
                                    </a>
                                </li>
                            @endguest

                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ Auth::user()->getGeneratedPhotoAttribute() }}" alt="{{ Auth::user()->name }}"
                                            width="32" height="32" class="rounded-circle me-2">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/">Account</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endauth

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
