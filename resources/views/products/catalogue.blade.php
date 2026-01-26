@extends('layout.master')

@section('content')

<div class="container py-5">

    <!-- PAGE WRAPPER -->
    <div class="bg-white shadow-lg rounded-4 p-4 p-md-5">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Catalogue des produits</h2>
                <p class="text-muted mb-0">
                    Gérez et consultez les produits disponibles.
                </p>
            </div>

            <a href="/products/create" class="btn btn-success">
                + Ajouter un produit
            </a>
        </div>

        <!-- Filtres -->
        <form class="row g-3 mb-4">
            <div class="col-md-5">
                <input type="text"
                       class="form-control"
                       placeholder="Rechercher un produit...">
            </div>

            <div class="col-md-4">
                <select class="form-select">
                    <option>Toutes catégories</option>
                    <option>Plantes</option>
                    <option>Graines</option>
                    <option>Outils</option>
                </select>
            </div>

            <div class="col-md-3 d-grid">
                <button type="button" class="btn btn-outline-success">
                    Filtrer
                </button>
            </div>
        </form>

        <!-- Produits -->
        <div class="row g-4">

            <!-- Produit -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://placehold.co/600x400"
                         class="card-img-top"
                         alt="Produit">

                    <div class="card-body">
                        <span class="badge bg-success mb-2">Plantes</span>
                        <h5 class="card-title">Plante Verte Nature</h5>
                        <p class="card-text text-muted">
                            Plante écologique idéale pour la maison.
                        </p>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">120 MAD</span>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-outline-success">
                                Voir
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produit -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://placehold.co/600x400"
                         class="card-img-top"
                         alt="Produit">

                    <div class="card-body">
                        <span class="badge bg-success mb-2">Graines</span>
                        <h5 class="card-title">Graines Bio</h5>
                        <p class="card-text text-muted">
                            Graines naturelles pour culture durable.
                        </p>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">35 MAD</span>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-outline-success">
                                Voir
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produit -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://placehold.co/600x400"
                         class="card-img-top"
                         alt="Produit">

                    <div class="card-body">
                        <span class="badge bg-success mb-2">Outils</span>
                        <h5 class="card-title">Outil de Jardinage</h5>
                        <p class="card-text text-muted">
                            Outil robuste et ergonomique.
                        </p>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">90 MAD</span>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-outline-success">
                                Voir
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- END PAGE WRAPPER -->

</div>

@endsection