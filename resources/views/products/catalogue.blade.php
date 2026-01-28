@extends('layout.master')
@section('content')

<style>
    html{
        scroll-behavior: smooth
    }
#home {
    width: 100%;
    height: calc(100vh - 57px);
    background-image: url("{{ asset('images/3d-render-modern-background-with-plexus-design.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
}


/* overlay خفيف باش النص يبان */
#home::before {
content: "";
position: absolute;
inset: 0;
background: rgba(0,0,0,0.8);
}
</style>


<div id="home" class="position-relative d-flex align-items-center justify-content-center">


<div class="text-white text-center position-relative">
<h1 class="fw-bold display-5">GreenTech Solutions 🌱</h1>
<p class="lead">Catalogue de produits écologiques</p>
<a href="#catalogue" class="btn btn-success btn-lg mt-3">
    Voir le catalogue ↓
</a>
</div>


</div>


</div>
    <div class="container py-5" id="catalogue">

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
                    <input type="text" class="form-control" placeholder="Rechercher un produit...">
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
                        <img src="{{ asset('images/green-houseplant-background-plant-lovers.jpg') }}" class="card-img-top"
                            style="height:200px; object-fit:cover;" alt="Plante">

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
                        <img src="{{ asset('images/green-houseplant-background-plant-lovers.jpg') }}" class="card-img-top"
                            style="height:200px; object-fit:cover;" alt="Plante">

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
                        <img src="{{ asset('images/green-houseplant-background-plant-lovers.jpg') }}" class="card-img-top"
                            style="height:200px; object-fit:cover;" alt="Plante">

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