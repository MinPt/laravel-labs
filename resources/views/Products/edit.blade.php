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
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
</form>

<div class="modal" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">confirm deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="delete-product" type="button" class="btn btn-danger">Confirm</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $("#delete-product").click(function(){
      var id = {!! $product->id !!} ;
      $.ajax({url: "/products/" + id, type: "post", data: {
        _method: 'delete',
        _token: "{!! csrf_token() !!}"
      }, success:function(msg){
          location.href="/products"
      }});
    });
  });
</script>


@endsection



