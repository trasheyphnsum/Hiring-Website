<?php

namespace App\Http\Controllers;
use App\Equipment;
use App\Vehicle;
use App\Register;
use Illuminate\Http\Request;

class Restroscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('hire/home');
    }
    public function contact()
    {
        
        return view('hire/contact');
    }
    public function add(Request $request)
    {
        // return $request->input();
        $equip = new Equipment;
        $equip->email= $request->input('email');
        $equip->Phone_Number=$request->input('Phone_Number');
        $equip->Equipment_Type=$request->input('Equipment_Type');
        $equip->Price=$request->input('Price');
        $equip->Condition=$request->input('Condition');
        $equip->Location=$request->input('Location'); 
        $equip->Image=$request->input('Image');
        $request->session()->flash('status','Your Post added Successfully');
        $equip->save();
    }

    //vehivle machinaries

    public function add1(Request $request)
    {
        // return $request->input();
        $equip = new Vehicle;
        $equip->email= $request->input('email');
        $equip->Phone_Number=$request->input('Phone_Number');
        $equip->Vehicle_Type=$request->input('Vehicle_Type');
        $equip->Price=$request->input('Price');
        $equip->Condition=$request->input('Condition');
        $equip->Location=$request->input('Location'); 
        $equip->Image=$request->input('Image');
        $request->session()->flash('status','Your Post added Successfully');
        $equip->save();
    }

    //Register

    public function register(Request $request)
    {
        $equip = new Register;
        $equip->Name= $request->input('Name');
        $equip->Email= $request->input('Email');
        $equip->Phone_Number=$request->input('Phone_Number');
        $equip->User_Name=$request->input('User_Name');
        $equip->Password=$request->input('Password');
        $equip->retype_password=$request->input('retype_password');
        $request->session()->flash('status','Successfully register');
        $equip->save();
        return redirect('/');
    }
    //equipment view
    public function list()
    {
        $data = Equipment::all();
        return view('hire/home',["data"=>$data]);
    }

    //vehicle view

    public function list1()
    {
        $data = Vehicle::all();
        return view('hire/home',["data"=>$data]);
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
        //
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
        //
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