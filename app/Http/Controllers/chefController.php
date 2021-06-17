<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\chef;
use App\Models\cake;


class chefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = chef::all();
        return view('./chef/showChef', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('./chef/createChef');
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
            'name' => $request->name,
            'gender' => $request->gender,
        ]);
        return redirect('/chef');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chef = chef::findOrFail($id);
        return view('./chef/chefEdit', compact('chef'));
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
            'name' => $request->name,
            'gender' => $request->gender,
        ]);
        return redirect('/chef');
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
        return back();
        
    }

    public function detail($id)
    {
        $chef = chef::findOrFail($id);
        return view('./chef/chefDetail', compact('chef'));
    }
}
