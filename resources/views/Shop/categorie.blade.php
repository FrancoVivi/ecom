@extends('shop')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if ($category->parent_id !== null)
                <li class="breadcrumb-item active" aria-current="page"> <a
                        href="{{ route('voir_produit_par_cat', ['id' => $category->parent->id]) }}">{{ $category->parent->nom }}</a>
                </li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{ $category->nom }}</li>
            @foreach ($category->childrens as $children)
                <li class="breadcrumb-item">
                    <a href="{{ route('voir_produit_par_cat', ['id' => $children->id]) }}">{{ $children->nom }}</a>
                </li>
            @endforeach

        </ol>
    </nav>
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($produits as $produit)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('Produits/' . $produit->photo_principale) }}"
                                    class="card-img-top img-fluid" alt="{{ $produit->nom }}">
                                <div class="card-body">
                                    <p class="card-text">
                                        <span class="badge bg-primary">{{ $produit->nom }}</span>
                                        <br>{{ $produit->description }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price">{{ number_format($produit->prix_ht, 2) }} F CFA</span>
                                        <a href="{{ Route('voir_produit', ['id' => $produit->id]) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
