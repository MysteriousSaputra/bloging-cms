@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create a new category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Category</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success">Store category</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection