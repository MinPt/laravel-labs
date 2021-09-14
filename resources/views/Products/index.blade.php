@extends("layout")

@section("app-title")
Products
@endsection

@section("page-title", $title)


@section("page-content")

<table class="table">
    <tr>
      <th class="col">Name</th>
      <th class="col">Quantity</th>
      <th class="col"><a href="/products/create" class="btn btn-success">Add new product</a></th>
      <th></th>
    </tr>
  @foreach ($products as $row)

    <tr>
      <td>{{ $row['name']}}</td>
      <td>{{ $row['quantity']}}</td>
      <td><a href="/products/{{ $row->id }}/edit" class="btn btn-primary">Edit </a></td>
      <td><a href="/products/{{ $row->id }}" class="btn btn-primary">See </a></td>
    </tr>
  @endforeach

  </table>
@endsection



