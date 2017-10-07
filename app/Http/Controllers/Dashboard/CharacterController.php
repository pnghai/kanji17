<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$characters = Character::where("dongdu_order",">",0)->orderBy('dongdu_order','asc')->paginate(80);
        return view('dashboard.characters.index',compact('characters'));
    }

    public function bushu(){
	    $characters = Character::whereIsBushu(true)->get();
	    return view('dashboard.characters.index',compact('characters'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('dashboard.characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $character = new Character;
	    $character->fill($request->input());
	    $character->is_bushu = $request->has('is_bushu');
	    $character->save();
	    return redirect()->route('admin.characters.index');
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
	    $character = Character::findOrFail($id);
	    return response()->view('dashboard.characters.edit', compact('character'));
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
	    $character = Character::findOrFail($id);
	    $character->fill($request->input());
        $character->is_bushu = $request->has('is_bushu');
	    $character->save();
	    return redirect()->route('admin.characters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $character = Character::findOrFail($id);
	    $character->delete();
	    return redirect()->route('admin.characters.index');
    }
}
