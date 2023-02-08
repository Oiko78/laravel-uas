<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="px-lg-5 container px-4">
        <a class="navbar-brand" href="/">@lang('globul.header_title')</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0 ms-lg-4 mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" aria-current="page">@lang('globul.navbar_home')</a>
                </li>
                @auth
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('users.update', auth()->user()->id) }}">Profile</a></li>
                    @can('admin')
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Account Maintenance</a></li>
                    @endcan
                @endauth
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">
                        @lang('globul.navbar_language')
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('language', 'en') }}">English</a></li>
                        <li><a class="dropdown-item" href="{{ route('language', 'id') }}">Indonesia</a></li>
                    </ul>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav mb-lg-0 mb-2 gap-3">
                    <li class="nav-item">
                        <form class="d-flex" action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button class="btn" type="submit">@lang('globul.navbar_logout')</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-dark" href="{{ route('cart.index') }}">
                            <i class="bi-cart-fill me-1"></i>
                            @lang('globul.navbar_cart')
                            <span
                                class="badge bg-dark ms-1 rounded-pill text-white">{{ auth()->user()->cart->items->count() }}</span>
                        </a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav mb-lg-0 ms-lg-4 mb-2 gap-2">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('login') }}">@lang('globul.navbar_login')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">@lang('globul.navbar_register')</a></li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
