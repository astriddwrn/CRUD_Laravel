<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chef;

class chefApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = chef::all();
        return response()->json([
            'chef' => $chefs
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
        chef::create([
            'name' =>$request->name,
            'gender' => $request->gender,
        ]);
        return response()->json([
            'message' => 'success add new chef'
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
        chef::findOrFail($id)->update([
            'name'=>$request->name,
            'gender'=>$request->gender,
        ]);
        return response()->json([
            'message' => 'success update chef'
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
        chef::destroy($id);
        return response()->json([
            'message'=>'success delete chef'
        ]);
    }
}
