@extends("layout")

@section("app-title")
    Manufacturer
@endsection

@section("page-title", "Manufacturer info")


@section("page-content")

    <h2>Manufacturer: {{ $manufacturer->name}}</h2>
    <h5>Country: {{ $manufacturer->Country}}</h5>
    <h5>Manufacturer product: {{ $manufacturer->product->name}}</h5>

    <a href="/manufacturers" class="btn btn-primary">Go back</a>
@endsection



