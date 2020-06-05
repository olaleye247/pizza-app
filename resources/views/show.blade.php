@extends('layouts.app')
@section('content')
<!-- <div class="flex-center position-ref full-height"> -->
<div class="wrapper pizza-details">
    <div class="titl m-b-md">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p class="toppings">Extra Toppings: </p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
            @endforeach
        </ul>

        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete order</button>
        </form>
        <p><a href="{{ route('pizzas.index') }}"><- Back to Pizzas</a></p>
    </div>
</div>
<!-- </div> -->
@endsection

