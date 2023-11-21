<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Store $store)
    {
        return view('stores.index')->with(['stores' => $store->getPaginateByLimit(5)]);
    }
    
    public function show(Store $store)
    {
        return view('stores.show')->with(['store' => $store]);
    }
    
    public function create()
    {
        return view('stores.create');
    }
    
    public function preserve(Request $request, Store $store)
    {
        $input = $request['store'];
        $store->fill($input)->save();
        return redirect('/stores/' . $store->id);
        //dd($request->all());
    }
    
}
