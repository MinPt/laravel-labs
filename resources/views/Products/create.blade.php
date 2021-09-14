@extends("layout")

@section("app-title")
Products
@endsection

@section("page-title", "Add product")


@section("page-content")

<form method="post" action="/products">
  {{ csrf_field() }}
  <div class="mb-3">
    <label for="name" class="form-label">Product name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">Product quantity</label>
    <input type="text" class="form-control" name="quantity" id="quantity">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection



