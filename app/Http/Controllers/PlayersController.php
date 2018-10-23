<?php

namespace App\Http\Controllers;

use App\Players;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $players = Players::all();
        return view('scouts.players',compact('players'));
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
        $formInput = $request->all();
        $this->validate($request,[
            'Firstname'=>'required',
            'Lastname'=>'required',
            'Age'=>'required',
            'Position'=>'required',
            'Height'=>'required',
            'Stats'=>'required',
        ]);

        Players::create($formInput);
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $players= Players::all();
        return view('players',compact(['players']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Players $players)
    {
        return view('scouts.edit',compact('players'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $details =$request->all();
        $this->validate($request,[
            'Firstname'=>'required',
            'Lastname'=>'required',
            'Age'=>'required',
            'Position'=>'required',
            'Height'=>'required',
            'Stats'=>'required',
        ]);
        Players::update($details);
       return redirect()->route('table')->with('message','item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $players= Players::find($id);
        $players->players()->delete();
        $players= delete();
        return redirect()->route('table')->with('message','item has been deleted successfully');

    }
}
