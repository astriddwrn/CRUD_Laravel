<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cake;

class cakeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cakes = cake::all();
        return response()->json([
            'cake' => $cakes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cake::create([
            'chef_id' => $request->chef_id,
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return response()->json([
            'message' => 'successful add new cake'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        cake::findOrFail($id)->update([
            'chef_id' => $request->chef_id,
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return response()->json([
            'message' => 'successful update cake'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cake::destroy($id);
        return response()->json([
            'message' => 'successful delete cake'
        ]);
    }
}
