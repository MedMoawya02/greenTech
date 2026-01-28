@extends('layout.master')

@section('body-class', 'create-product')

@section('content')

<style>
/* Fullscreen wrapper without scroll */
body.create-product {
    overflow: hidden;
}

.fullscreen-wrapper {
    min-height: 100vh; /* full viewport height */
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f5f5;
}
</style>

<div class="fullscreen-wrapper">

    <div class="container">

        <div class="bg-white shadow-lg rounded-4 p-4 p-md-5">

            <!-- Page title -->
            <div class="mb-4 text-center">
                <h2 class="fw-bold">
                    <i class="bi bi-flower1 text-success me-2"></i>
                    Ajouter un produit
                </h2>
                <p class="text-muted mb-0">
                    Créez un nouveau produit pour le catalogue GreenTech Solutions.
                </p>
            </div>

            <!-- Card Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0 fw-semibold">
                                <i class="bi bi-leaf me-2"></i>
                                Informations du produit
                            </h5>
                        </div>

                        <div class="card-body">

                            <form method="POST" enctype="multipart/form-data">
                                {{-- @csrf --}}

                                <!-- Nom du produit -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-tag-fill text-success me-1"></i>
                                        Nom du produit
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder="Ex : Plante verte naturelle">
                                </div>

                                <!-- Catégorie -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-grid-fill text-success me-1"></i>
                                        Catégorie
                                    </label>
                                    <select class="form-select">
                                        <option selected disabled>Choisir une catégorie</option>
                                        <option>🌿 Plantes</option>
                                        <option>🌱 Graines</option>
                                        <option>🛠 Outils</option>
                                    </select>
                                </div>

                                <!-- Prix & Stock -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-currency-exchange text-success me-1"></i>
                                            Prix (MAD)
                                        </label>
                                        <input type="number"
                                               class="form-control"
                                               placeholder="0.00">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-box-seam text-success me-1"></i>
                                            Stock
                                        </label>
                                        <input type="number"
                                               class="form-control"
                                               placeholder="Quantité disponible">
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-card-text text-success me-1"></i>
                                        Description
                                    </label>
                                    <textarea class="form-control"
                                              rows="4"
                                              placeholder="Description du produit..."></textarea>
                                </div>

                                <!-- Image -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-image-fill text-success me-1"></i>
                                        Image du produit
                                    </label>
                                    <input type="file" class="form-control">
                                    <div class="form-text">
                                        Formats acceptés : JPG, PNG – max 2MB
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="/"
                                       class="btn btn-outline-secondary">
                                        <i class="bi bi-arrow-left me-1"></i>
                                        Retour au catalogue
                                    </a>

                                    <div class="d-flex gap-2">
                                        <button type="button"
                                                class="btn btn-outline-success">
                                            <i class="bi bi-magic me-1"></i>
                                            Générer avec l’IA
                                        </button>

                                        <button type="submit"
                                                class="btn btn-success px-4">
                                            <i class="bi bi-check-circle me-1"></i>
                                            Enregistrer
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <!-- END Card Form -->

        </div>
    </div>

</div>

@endsection