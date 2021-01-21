<?php

namespace App\Http\Controllers;
use App\Equipment;
use App\Vehicle;
use App\Register;
use App\Tutor;
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
    //tutor
    public function addtutor(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $imageName = time().'.'.$request->Image->extension(); 
        $request->Image->move(public_path('images'), $imageName);

        $tutor = new Tutor;
        $tutor->Experience=$request->input('Experience');
        $tutor->subject=$request->input('subject');
        $tutor->Qualification=$request->input('Qualification');
        $tutor->Service_charge=$request->input('Service_charge');
        $tutor->Location=$request->input('Location'); 
        $tutor->Image=$imageName;
        $tutor->user_id=Auth::user()->id;
        $request->session()->flash('status','Your Post added Successfully');
        $tutor->save();
        return redirect()->route('list_home');
    }

    // view
    public function list()
    {
        $record=Equipment::with('getUserRelation')->paginate(3);

        $record1=Vehicle::with('getUserVehicleRelation')->paginate(3);

        return view('hire/home',["record"=>$record],["record1"=>$record1]);
     }
}
