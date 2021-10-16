@extends("layout")

@section('app-title', "Manufacturers")
@section('page-title', 'Manufacturers')

@section('page-content')
    <a href="/manufacturers/create">Create manufacturer</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Country</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($manufacturers as $manufacturer)
            <tr>
                <td>{{ $manufacturer->name }}</td>
                <td>{{ $manufacturer->Country }}</td>
                <td>
                    <a class="btn btn-primary" href="/manufacturers/{{ $manufacturer->id }}">See</a>
                    <a class="btn btn-success" href="/manufacturers/{{ $manufacturer->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
