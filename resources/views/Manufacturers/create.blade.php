@extends("layout")

@section("app-title")
    Manufacturer
@endsection

@section("page-title", "Add manufacturer")


@section("page-content")

    <form method="post" action="/manufacturers">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="name" class="form-label">Manufacturer name</label>
            <input value="{{ old('name') }}" maxlength="50" type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            <small>
                <ul>
                    @foreach($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Manufacturer country</label>
            <input value="{{ old('Country') }}" type="text" class="form-control" name="Country" id="Country">
            <small>
                <ul>
                    @foreach($errors->get('Country') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>
        <div>
            <label for="product">Product</label>
            <select name="product_id" id="product_id">
                <option selected value="0">Choose Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            <small>
                <ul>
                    @foreach($errors->get('product_id') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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

@endsection



