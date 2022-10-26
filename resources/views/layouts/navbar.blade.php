<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <div class="d-flex">
            <a class="navbar-brand" href="{{ route('home.index') }}">Barbatos Shop</a>
            <div class="collapse navbar-collapse" id="navbarNavLightDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('products.index', 'category=' . $category->category_name) }}">{{ $category->category_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @admin
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.manage') }}">Manage product</a>
                        </li>
                    @endadmin
                </ul>
            </div>
        </div>
        @guest
            <div class="d-flex gap-3">
                <a href="{{ route('login.index') }}" class="text-decoration-none text-black">
                    Login
                </a>
                <a href="{{ route('register.show') }}" class="text-decoration-none text-black">
                    Register
                </a>
            </div>
        @endguest
        @auth
            <div class="d-flex gap-3">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile.index') }}" class="dropdown-item">Profile</a></li>
                            <li><a href="{{ route('transaction.index') }}" class="dropdown-item">History</a></li>
                            <li><a href="{{ route('cart.index') }}" class="dropdown-item">Cart</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li><button class="dropdown-item" type="submit">Logout</button></li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
