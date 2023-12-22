@extends('templates.master')

@section('content-center')
<div class="card card-body content-center">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{$product->imgUrl}}"
                style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h5 class="card-title">{{ $product->Company->name }}</h5>
            <p class="card-text">{{ $product->name }} : {{ $product->description }}</p>
            <p><strong>{{ number_format($product->price * ((100 - $product->discountPercent) / 100), 2) }}</strong>€</p>
            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Añadir al carrito</a>

        </div>
    </div>
</div>
@endsection