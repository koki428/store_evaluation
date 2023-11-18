<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Store $store)
    {
        return view('stores.index')->with(['stores' => $store->getByLimit(5)]);
    }
    
    public function show(Store $store)
    {
        return view('stores.show')->with(['store' => $store]);
    }
}
