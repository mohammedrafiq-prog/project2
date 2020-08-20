<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
class todoc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=todo::all();
        return view('home')->with('todos',$todos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('layout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'day'=>'required',
            'body'=>'required'
        ]);
        $todo=new todo();
        $todo->title=$request->title;
        $todo->day=$request->day;
        $todo->body=$request->body;
        $todo->save();
        return redirect('/')->with('success','todo created');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo=todo::find($id);

        return view('layout.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo=todo::find($id);
        //view('layout.edit')->with('todo',$todo);
        return view('layout.edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $todo=todo::find($id);
        $todo->title = $request->title;
        $todo->day = $request->day;
        $todo->body = $request->body;
        $todo->save();
        return redirect('/')->with('success', 'todo edited');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $todo=todo::find($id);
    $todo->delete();
    return redirect('/')->with('success', 'todo deleted');

    }
}
