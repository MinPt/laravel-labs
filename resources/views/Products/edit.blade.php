@extends("layout")

@section("app-title")
Products
@endsection

@section("page-title", "Edit product")


@section("page-content")

<form method="post" action="/products/{{ $product->id }}">
  @csrf
  {{ method_field("patch") }}
  <div class="mb-3">
    <label for="name" class="form-label">Product name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ $product->name}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">Product quantity</label>
    <input type="text" class="form-control" name="quantity" value="{{ $product->quantity}}"  id="quantity">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection



