<?php

namespace App\Http\Controllers;
use App\Equipment;
use App\Vehicle;
use App\Register;
use Illuminate\Http\Request;
use Session;
use Auth;
//use Illuminate\Support\Facades\DB;
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
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $imageName = time().'.'.$request->Image->extension(); 
        $request->Image->move(public_path('images'), $imageName);

        $equip = new Equipment;
        $equip->Equipment_Type=$request->input('Equipment_Type');
        $equip->Price=$request->input('Price');
        $equip->Condition=$request->input('Condition');
        $equip->Location=$request->input('Location'); 
        $equip->Image=$imageName; 
        $equip->user_id=Auth::user()->id;
        $request->session()->flash('status','Your Post added Successfully');
        $equip->save();
        return redirect()->route('list_home');
    }

    //vehivle machinaries

    public function add1(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $imageName = time().'.'.$request->Image->extension(); 
        $request->Image->move(public_path('images'), $imageName);

        $equip = new Vehicle;
        $equip->Vehicle_Type=$request->input('Type');
        $equip->Price=$request->input('Price');
        $equip->Condition=$request->input('Condition');
        $equip->Location=$request->input('Location'); 
        $equip->Image=$imageName;
        $equip->user_id=Auth::user()->id;
        $request->session()->flash('status','Your Post added Successfully');
        $equip->save();
        return redirect()->route('list_home');
    }

    //equipment view
    public function list()
    {
        //$record = Equipment::paginate(3);
        $record=Equipment::with('getUserRelation')->paginate(3);
        $record1=Vehicle::with('getUserVehicleRelation')->paginate(3);
        //dd($record);
        Session::flash('message','equipment');
        return view('hire/home',["record"=>$record],["record1"=>$record1]);
     }

    //vehicle view
    public function list1()
    {
        $record = Vehicle::paginate(3);
        Session::flash('message','vehicle');
        return view('hire/reservation',["record"=>$record]);
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
