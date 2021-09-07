@extends("layout")

@section("app-title")
Products
@endsection

@section("page-title")
Products
@endsection

@section("page-content")

<table>
    <tr>
      <th>Name</th>
      <th>Quantity</th>
    </tr>
  @foreach ($products as $row)

    <tr>
      <td>{{ $row['name']}}</td>
      <td>{{ $row['quantity']}}</td>
    </tr>
  @endforeach

  </table>
@endsection



