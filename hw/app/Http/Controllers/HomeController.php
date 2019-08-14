<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\members;
use App\message;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        // $m = members::find(1);
        // return $m;

        // $d = Department::find(1)->employees();
        // dd($d->first()->firstName);
        // $message = message::find(1);
        // dd($message->title);
        // $emp = Employee::find(1);
        // dd($emp->firstName);

        // $d = Employee::find(1)->department();
        // dd($d->first()->departmentName);

        $message = message::all();
        return view("home.index", compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("home.login");
    }

    public function insert()
    {
    return view("home.insert");
    }

    public function insertTo(Request $request)
    {   
        
        $updt = new message();

        $updt->title = $request->title;
        $updt->content = $request->content;
        
        $updt->save();
        return redirect("/hw/admin");
        
    }
    // public function login()
    // {
    //     return view("home.login");
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $message = message::all();
        return view("home.admin_index", compact('message'));
        
    
    }
    // public function admin_index()
    // {
    //     $message = message::all();
    //     return view("home.admin_index", compact('message'));
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mess = message::find($id);
        return view('home.show', compact('mess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edt = message::find($id);
        return view('home.edit', compact('edt'));
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
        $updt = message::find($id);
        $updt->title = $request->title;
        $updt->content = $request->content;
        
        $updt->save();
        return redirect("/hw/admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dele = message::find($id);
        $dele->delete();
        return redirect("/hw/admin");
    }
}
