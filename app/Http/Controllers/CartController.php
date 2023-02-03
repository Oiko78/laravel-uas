<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('users.cart');
    }

    /**
     * Add product to cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $cart = auth()->user()->cart;
        $cart->items()->attach($request->input('item_id'));
        return back();
    }

    /**
     * Remove product to cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request) {
        $cart = auth()->user()->cart;
        $cart->items()->detach($request->input('item_id'));
        return back();
    }

    /**
     * Destroy cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $cart = auth()->user()->cart;
        $cart->items()->sync([]);
        return redirect('/success');
    }
}
