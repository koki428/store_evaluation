<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $keyword = request('keyword');
        $stores = Store::all();
        return view('stores.index',['stores' => $stores, 'keyword' => $keyword]);
        //return view('stores.index')->with(['stores' => $store->getPaginateByLimit(5)]);
    }
    
    public function search(Request $request, Store $store)
    {
        $keyword = $request->input('keyword');
        $search = Store::where('name', 'like', '%'.$keyword.'%')->get();
        
        if($search->isEmpty() || !isset($keyword)){
            //dd($search);
            return view('stores.no_result');
        }
        else{
            //dd($search);
            //return view('stores.search');
            //$key = store::where('name', 'like', '%'.$keyword.'%')->getPaginateByLimit(5);
            $store=$search;
            return view('stores.search', ['stores' => $store]);
        }
        //return view('stores.search')->with(['stores' => $store->getPaginateByLimit(5)]);
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
