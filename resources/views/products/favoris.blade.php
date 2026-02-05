@extends('layout.master')

@section('content')
    <div class="container py-5">

        <h2 class="fw-bold mb-4 text-success">
            <i class="bi bi-heart-fill me-2"></i> Mes favoris
        </h2>

        @if($products->isEmpty())
            <div class="alert alert-info">
                Aucun produit ajouté aux favoris 🌱
            </div>
        @else
            <div class="row g-4">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">

                            <img src="{{ asset('images/green-houseplant-background-plant-lovers.jpg') }}" class="card-img-top"
                                style="height:200px; object-fit:cover;" alt="{{ $product->name }}">

                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted">
                                    {{ Str::limit($product->description, 80) }}
                                </p>
                            </div>

                            <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                <span class="fw-bold text-success">
                                    {{ $product->prix }} MAD
                                </span>

                                {{-- Retirer des favoris --}}
                                <form method="POST" action="{{ route('favorites.toggle', $product->id) }}">
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm rounded-circle">
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
@endsection