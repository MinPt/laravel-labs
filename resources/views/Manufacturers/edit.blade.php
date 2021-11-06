@extends("layout")

@section("app-title")
    Manufacturer
@endsection

@section("page-title", "Edit manufacturer")


@section("page-content")

    <form method="post" action="/manufacturers/{{ $manufacturer->id }}">
        @csrf
        {{ method_field("patch") }}
        <div class="mb-3">
            @include("includes/input", [
    'fieldId' => 'name', 'labelText' => 'Manufacturer name', 'placeHolderText' => 'name', 'fieldValue' => $manufacturer->name
])

        </div>
        <div class="mb-3">
            @include("includes/input", [
    'fieldId' => 'Country', 'labelText' => 'Manufacturer country', 'placeHolderText' => 'country', 'fieldValue' => $manufacturer->Country
])
        </div>
        <div>
            <label for="product">Product</label>
            <select name="product_id" id="product_id">
                <option selected value="0">Choose Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
        $(document).ready(function () {
            $("#delete-product").click(function () {
                var id = {!! $manufacturer->id !!};
                $.ajax({
                    url: "/manufacturers/" + id, type: "post", data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    }, success: function (msg) {
                        location.href = "/manufacturers"
                    }
                });
            });
        });
    </script>
@endsection



