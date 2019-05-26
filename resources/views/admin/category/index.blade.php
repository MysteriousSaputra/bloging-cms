@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Categories
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('category.edit', ['id' => $item->id]) }}"><button class="btn btn-info btn-sm">edit</button></a> |
                                <a href="{{ route('category.delete', ['id' => $item->id]) }}"><button class="btn btn-danger btn-sm">delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection