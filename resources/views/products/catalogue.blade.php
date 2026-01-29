@extends('layout.master')

@section('content')

    <style>
        html {
            scroll-behavior: smooth;
        }

        #home {
            width: 100%;
            height: calc(100vh - 57px);
            background-image: url("{{ asset('images/3d-render-modern-background-with-plexus-design.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        #home::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.8);
        }
    </style>

    <!-- HERO -->
    <div id="home" class="d-flex align-items-center justify-content-center">
        <div class="text-white text-center position-relative">
            <h1 class="fw-bold display-5">GreenTech Solutions 🌱</h1>
            <p class="lead">Catalogue de produits écologiques</p>
            <a href="#catalogue" class="btn btn-success btn-lg mt-3">
                Voir le catalogue ↓
            </a>
        </div>
    </div>

    <!-- CATALOGUE -->
    <div class="container py-5" id="catalogue">
        <div class="bg-white shadow-lg rounded-4 p-4 p-md-5">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1">Catalogue des produits</h2>
                    <p class="text-muted mb-0">Gérez et consultez les produits disponibles.</p>
                </div>

                <a href="{{ route('products.create') }}" class="btn btn-success">
                    + Ajouter un produit
                </a>
            </div>
            <form method="GET" action="{{ route('products.index') }}" class="mb-4">
                @method('GET')
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search product..."
                        value="{{ request('q') }}">


                    <select name="category_id" class="form-select">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>


                    <button class="btn btn-outline-secondary" type="submit">
                        🔍 Search
                    </button>
                </div>
            </form>
            <!-- Produits -->
            <div class="row g-4">

                @forelse ($products as $product)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">

                            <img src="{{ asset('images/green-houseplant-background-plant-lovers.jpg') }}" class="card-img-top"
                                style="height:200px; object-fit:cover;" alt="{{ $product->name }}">

                            <div class="card-body">
                                <span class="badge bg-success mb-2">
                                    {{ $product->category->name ?? 'Général' }}
                                </span>

                                <h5 class="card-title">{{ $product->name }}</h5>

                                <p class="card-text text-muted">
                                    {{ $product->description }}
                                </p>
                            </div>

                            <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-success">
                                    {{ $product->prix }} MAD
                                </span>

                                <div class="d-flex gap-2">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-success">
                                        Voir
                                    </a>

                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-sm btn-outline-secondary">
                                        Modifier
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Aucun produit disponible pour le moment.</p>
                    </div>
                @endforelse

            </div>

        </div>
    </div>

@endsection