<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestStore;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $stores=Store::paginate(5);
        $stores=Store::all();
        return view('backend.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestStore $request,Store $store)
    {
        $store = new Store();
        $store->fill($request->all());
        $store->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store,$id)
    {
        $store=Store::findOrFail($id);
        return view('backend.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequestStore $request, $id)
    {
        $store = Store::findOrFail($id);
        $store->fill($request->all());
        $store->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store,$id)
    {
        $store = Store::findOrFail($id);
        $store->delete();
        return redirect()->route('admin.index');
    }

    public function search(Request $request)
    {
        $search = $request->title;
        $stores = DB::table('stores')->where('name', 'LIKE', "%{$search}%")->get();
        return view("backend.index", compact('stores'));
    }
}
