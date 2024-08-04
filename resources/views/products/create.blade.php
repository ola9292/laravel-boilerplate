@extends('layouts.app')

@section('content')
    <h3>Create Product</h3>

    <div>
        <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Product Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Description</label>
                <input type="text" name="description">
            </div>
            <div>
                <label for="">Price</label>
                <input type="number" name="price">
            </div>
            <div>
                <label for="">Stock</label>
                <input type="number" name="stock">
            </div>
            <div>
                <label for="">Tag</label>
                <select name="tag" id="">
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="kid">kid</option>
                </select>
            </div>
            <div>
                <label for="">Product Image</label>
                <input type="file" name="image">
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
