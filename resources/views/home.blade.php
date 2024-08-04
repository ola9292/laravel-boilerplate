@extends('layouts.app')

@section('content')
    <div class="carousel">
        <div class="carousel-text">
            <h1>Welcome to Shoe-Zone</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt molestiae reprehenderit veritatis quam voluptatum rerum alias vel, voluptates accusamus aliquam modi quos numquam saepe dolorem earum perferendis hic! Officiis, distinctio?</p>
        </div>
    </div>

    <div class="home-container">
        <div>
            <h1 style="text-align: center">All Products</h1>
        </div>
        <div class="product-container">
            @foreach ($products as $product)
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width:100%;">
                    <h1>{{$product->name}}</h1>
                    <p class="price">${{$product->price}}</p>
                    <p>{{$product->description}}</p>
                    <form action="{{ route('products.cart')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <p><button type="submit">
                            Add to Cart
                        </button></p>
                    </form>

                  </div>
            @endforeach
        </div>
    </div>



@endsection
