@extends("layout")

@section("app-title")
Products
@endsection

@section("page-title", "Product info")


@section("page-content")

  <h2>Product: {{ $product->name}}</h2>
  <h5>Quantity: {{ $product->quantity}}</h5>
  <a href="/products" class="btn btn-primary">Go back</a>
@endsection



