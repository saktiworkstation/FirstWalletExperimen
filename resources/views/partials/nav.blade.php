    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                </ul>
                {{-- Right Link --}}
                <span class="navbar-text">
                    @auth
                        <ul class="account">
                            <li class="dropdown">
                                <a class="btn-login-custom" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/dashboard">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Top Up</a></li>
                                    <li><a class="dropdown-item" href="#">Promotions and discounts</a></li>
                                    <li><a class="dropdown-item" href="#">FAQ</a></li>
                                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item px-3">
                                <a href="/sign-in" class="btn btn-outline-info">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a href="/sign-up" class="btn btn-info">Sign Up</a>
                            </li>
                        </ul>
                    @endauth
                </span>
            </div>
        </div>
    </nav>
