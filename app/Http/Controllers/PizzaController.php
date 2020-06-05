<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

    // public function __construct() {
    //     $this->middleware('auth');
    // }
    //
    public function index() {
        return view('index');
    }

    public function pizza() {

        // $pizzas = Pizza::all();

        // $pizzas = Pizza::orderBy('name', 'descending')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id) {

        // $pizza = Pizza::find($id);
        $pizza = Pizza::findOrFail($id);
        return view('show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('create');
    }

    public function store() {
        // error_log(request('name'));

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');


        $pizza->save();
        return redirect('/')->with('msg', 'Thanks for your order :)');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
