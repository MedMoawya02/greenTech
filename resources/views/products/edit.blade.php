@extends('layout.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">✏️ Edit Product</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name"
                                   class="form-control"
                                   value="{{ old('name', $product->name) }}"
                                   required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"
                                      class="form-control"
                                      rows="3">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <!-- Price & Stock -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" step="0.01" name="prix"
                                       class="form-control"
                                       value="{{ old('prix', $product->prix) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" name="stock"
                                       class="form-control"
                                       value="{{ old('stock', $product->stock) }}">
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="categorie_id" class="form-select">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->categorie_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('products.index') }}"
                               class="btn btn-secondary">
                                ⬅ Back
                            </a>

                            <button type="submit" class="btn btn-warning">
                                💾 Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection