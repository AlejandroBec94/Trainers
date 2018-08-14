<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home',['Name'=>"Alejandro Bec"]);
        $trainers =  Trainer::all();
        return view('trainers.index',compact('trainers'));

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

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path()."/images/",$name);
        }

        $trainer = new Trainer();
        $trainer->name      = $request->input('name');
        $trainer->avatar    = $name;
        $trainer->save();
        return redirect('trainers/create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Trainer $trainer)
     {
        //   $trainer = Trainer::find($id);
          return view("trainers.show",["trainer"=>$trainer]);
     }

    // public function show($slug)
    // {
    //     $trainer = Trainer::where("slug","=",$slug)->firstOrFail();
    //     return view("trainers.show",["trainer"=>$trainer]);
          
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {

        return view("trainers.edit",['trainer'=>$trainer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Trainer $trainer)
    {

        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path()."/images/",$name);
        }

        // $trainer->fill($request->all());
        $trainer->save();
        return "Updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}