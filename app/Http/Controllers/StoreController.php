<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Cloudinary;

class StoreController extends Controller
{
    public function index()
    {
        $keyword = request('keyword');
        $stores = Store::all();
        return view('stores.index',['stores' => $stores, 'keyword' => $keyword]);
        //return view('stores.index')->with(['stores' => $store->getPaginateByLimit(5)]);
    }
    
    public function name_index()
    {
        $keyword = request('keyword');
        $stores = Store::all();
        return view('stores.name_index',['stores' => $stores, 'keyword' => $keyword]);
        //return view('stores.index')->with(['stores' => $store->getPaginateByLimit(5)]);
    }
    
    public function genre_index()
    {
        $keyword = request('keyword');
        $stores = Store::all();
        return view('stores.genre_index',['stores' => $stores, 'keyword' => $keyword]);
        //return view('stores.index')->with(['stores' => $store->getPaginateByLimit(5)]);
    }
    
    public function address_index()
    {
        $keyword = request('keyword');
        $stores = Store::all();
        return view('stores.address_index',['stores' => $stores, 'keyword' => $keyword]);
        //return view('stores.index')->with(['stores' => $store->getPaginateByLimit(5)]);
    }
    
    public function name_search(Request $request, Store $store)
    {
        $keyword = $request->input('name');
        $search = Store::where('name', 'like', '%'.$keyword.'%')->get();
        
        
        if($search->isEmpty() || !isset($keyword)){
            //dd($search);
            return view('stores.no_result');
        }
        else{
            $store=$search;
            return view('stores.search_result', ['stores' => $store]);
        }
    }
    
    public function genre_search(Request $request, Store $store)
    {
        $keyword = $request->input('genre');
        $search = Store::where('genre', 'like', '%'.$keyword.'%')->get();
        
        if($search->isEmpty() || !isset($keyword)){
            //dd($search);
            return view('stores.no_result');
        }
        else{
            $store=$search;
            return view('stores.search_result', ['stores' => $store]);
        }
    }
    
    public function address_search(Request $request, Store $store)
    {
        $keyword = $request->input('address');
        $search = Store::where('address', 'like', '%'.$keyword.'%')->get();
        
        if($search->isEmpty() || !isset($keyword)){
            //dd($search);
            return view('stores.no_result');
        }
        else{
            $store=$search;
            return view('stores.search_result', ['stores' => $store]);
        }
    }
    
    public function show_all(Store $store)
    {
        return view('stores.show_all')->with(['stores' => $store->getPaginateByLimit(5)]);
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
        //dd($image_url);
        
        $image_url1 = Cloudinary::upload($request->file('image_url1')->getRealPath())->getSecurePath();
        //dd($image_url);
        $input = $request['store'];
        $input += ['image_url1' => $image_url1];
        $store->fill($input)->save();
        return redirect('/stores/' . $store->id);
        //dd($request->all());
        
        $image_url2 = Cloudinary::upload($request->file('image_url2')->getRealPath())->getSecurePath();
        //dd($image_url);
        $input = $request['store'];
        $input += ['image_url2' => $image_url2];
        $store->fill($input)->save();
        return redirect('/stores/' . $store->id);
        
        $image_url3 = Cloudinary::upload($request->file('image_url3')->getRealPath())->getSecurePath();
        //dd($image_url);
        $input = $request['store'];
        $input += ['image_url3' => $image_url3];
        $store->fill($input)->save();
        return redirect('/stores/' . $store->id);
    }
    
    public function edit(Store $store)
    {
        return view('stores.edit')->with(['store' => $store]);
    }
    
    public function update(StoreRequest $request, Store $store)
    {
        $input_store = $request['store'];
        $store->fill($input_store)->save();
        return redirect('/stores/' . $store->id);
    }
}
