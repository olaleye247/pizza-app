@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height home-page">
    <div class="content">
        <div class="title m-b-md">
            <h1>Welcome To Pizza Parlour!</h1>
            <p class="msg">{{ session('msg') }}</p>
            <div class="home-links">
                <a href="{{ route('pizzas.create') }}"><button class="btn btn-primary ml-5"> Click here to place an order?</button></a>
                <a href="{{ route('pizzas.index') }}"><button class="btn btn-success ml-5">Click here to view all orders</button></a>
            </div>
            
        </div>
        
    </div>
</div>
@endsection

