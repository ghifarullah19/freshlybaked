<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class DashboardCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('col') && request('sort')) {
            if (request('col') == 'user') {
                return view('dashboard.orders.index', [
                    'carts' => Cart::join('users', 'users.id', '=', 'carts.user_id')
                    ->orderBy('users.name', request('sort'))
                    ->select('carts.*', 'users.name as user_name')
                    ->get(),
                ]);
            } else {
                return view('dashboard.orders.index', [
                    'carts' => Cart::orderBy('carts.' . request('col'), request('sort'))->get(),
                ]);
            }
        } else {
            return view('dashboard.orders.index', [
                'carts' => Cart::all(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function print()
    {
        return view('dashboard.print.histories', [
            'carts' => Cart::all(),
        ]);
    }
}
