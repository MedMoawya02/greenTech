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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-2">

                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('products.index') ? 'active text-success' : '' }}"
                       href="{{ route('products.index') }}">
                        Catalogue
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="btn btn-success btn-sm px-3"
                       href="{{ route('products.create') }}">
                        <i class="bi bi-plus-lg me-1"></i>
                        Nouveau produit
                    </a>
                </li>

                @auth
                    <!-- Nom de l'utilisateur -->
                    <li class="nav-item">
                        <span class="nav-link fw-bold text-dark">
                            {{ auth()->user()->name }}
                        </span>
                    </li>

                    <!-- Bouton logout -->
                    {{-- <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                Logout
                            </button>
                        </form>
                    </li> --}}
                @endauth

          
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