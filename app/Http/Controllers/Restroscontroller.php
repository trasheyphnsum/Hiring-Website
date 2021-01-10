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
        return redirect('/add');
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
        return redirect('/add1');
    }

    //Register

    public function register(Request $request)
    {
        $user = new Register;
        $user->Name= $request->input('Name');
        $user->Email= $request->input('Email');
        $user->Phone_Number=$request->input('Phone_Number');
        $user->User_Name=$request->input('User_Name');
        $user->Password=($request->input('Password')); 
        $user->retype_password=$request->input('retype_password');
        $request->session()->flash('status','Successfully register');
        $user->save();
        return redirect('/');
    
    }

    //login 
    public function login(Request $request)
    {
        $user = Register::where('Email',$request->input('Email'))-> get(); 
        if(($user[0]->Password) == $request->input('Password')){

            $request->session()->put('user', $user[0]->Name);
            echo "login";
            return redirect('/');
        }
    }

    //equipment view
    public function list()
    {
        $data = Equipment::all();
        return view('hire/add',["data"=>$data]);
    }

    //vehicle view

    public function list1()
    {
        $data = Vehicle::all();
        return view('hire/add1',["data"=>$data]);
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
