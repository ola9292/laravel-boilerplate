@extends('layouts.app')

@section('content')

<div class="container-lg">
    <h1>Basket</h1>
    <div class="cart-page-container">
        <div class="side-1">
            @foreach ($cartItems as $item)
            <div class="basket-card">
                <div>
                    <img src="{{ asset('storage/' . $item->product->image) }}" alt="" style="width:100px">
                </div>
                <div>
                    <p>{{ $item->product->name }}</p>
                    <p>{{ $item->product->price }}</p>
                </div>
                </div>
            @endforeach
        </div>
        <div class="side-2">
            <div class="order-summary">
                
            </div>  
        </div>
    </div>

</div>


@endsection
