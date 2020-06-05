@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Order Pizza</h1>
    <form action="/pizzas" method="POST" class="create-form">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="name">Choose Pizza Type:</label>
        <select name="type" id="">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose Base Type</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="toppings">Extra Toppings:</label>
            <div class="checkboxes">
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms
                <input type="checkbox" name="toppings[]" value="peppers">Peppers
                <input type="checkbox" name="toppings[]" value="garlic">Garlic
                <input type="checkbox" name="toppings[]" value="olives">Olives
            </div>
            
        </fieldset>
        <div class="order-button">
            <input class="ml-auto"  type="submit" value="Order Pizza">
        </div>
            
    </form>
</div>
@endsection

