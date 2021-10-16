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
            <label for="quantity" class="form-label">Product quantity</label>
            <input value="{{ old('quantity') }}" type="text" class="form-control" name="quantity" id="quantity">
            <small>
                <ul>
                    @foreach($errors->get('quantity') as $error)
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



