<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GreenTech Solutions</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<style>
    /* Bouton vert avec hover animé */
    .btn-hover {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 128, 0, 0.4);
    }

    /* Avatar circulaire */
    .avatar {
        font-weight: 600;
        user-select: none;
    }

    /* Optionnel : dropdown hover smooth */
    .dropdown-menu {
        transition: all 0.2s ease-in-out;
    }
</style>

<body class="bg-light text-dark">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
        <div class="container-fluid px-4">

            <!-- Logo -->
            <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2"
                href="{{ route('products.index') }}">
                <i class="bi bi-leaf-fill fs-4"></i>
                GreenTech
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-3">

                    <!-- Catalogue -->
                    <li class="nav-item">
                        <a class="nav-link fw-medium {{ request()->routeIs('products.index') ? 'active text-success' : '' }}"
                            href="{{ route('products.index') }}">
                            Catalogue
                        </a>
                    </li>

                    <!-- Nouveau produit -->
                    @auth
                        @if (auth()->user()->role == 'admin')
                            <li class="nav-item">
                                <a class="btn btn-success btn-sm px-3 d-flex align-items-center gap-1 btn-hover"
                                    href="{{ route('products.create') }}">
                                    <i class="bi bi-plus-lg"></i>
                                    Nouveau produit
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role=='client')
                            <a class="nav-link fw-medium {{ request()->routeIs('products.index') ? 'active text-success' : '' }}"
                            href="{{ route('favorites.products') }}">
                            Favoris
                        </a>
                        @endif
                    @endauth


                    @auth
                        <!-- Dropdown utilisateur avec avatar -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 fw-bold text-dark" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <!-- Avatar circulaire avec initiales -->
                                <div class="avatar bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width:35px; height:35px; font-size:0.9rem;">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                </div>

                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>


    <!-- Main content -->
    <main class="container-fluid p-0 m-0 ">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>