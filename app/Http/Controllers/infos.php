<?php

namespace App\Http\Controllers;
use App\Product;// imported to connect model with controller

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Hello";

        //To display all rows
       // return DB::select('select * from users');

    //    To display particular row
    //    return  DB::table('products')
    //    ->where ('id','1')
    //    ->get();

        // $data=DB::table('products')->find(2);
        // print_r($data);

        //how to delete 
        // return  DB::table('products')
        //     ->where ('id','1')
        //     ->delete();
        
        //To insert the data
        // return  DB::table('products')
        // ->insert([
        //     'name'=>'shoe',
        //     'detail'=> 'price: 23',
        // ]);

        // TO update the table
        // return  DB::table('products')
        // ->where ('id','3')
        // ->insert([
        //     'name'=>'shoe',
        //     'detail'=> 'price: 450'
        // ]);

        //Apply aggregation  
        //$data=DB::table('products')->max('id');
       // $data=DB::table('products')->min('id');
       //$data=DB::table('products')->sum('id');
        //$data=DB::table('products')->avg('id');
        // $data=DB::table('products')->count();
        // print_r($data);

         // Joins operattion
        // $data=DB::table('students')->get();
        // echo "<pre>";
        // print_r($data);
        
        /*Nees to revisit after learninig model parts*/
        // $data=DB::table('products')
        // ->select('students.name','products.name')
        // ->join('students','products.id','students.product_id')
        // ->get();
        //  echo "<pre>";
        //  print_r($data);

        //To display in list
        // $data = DB::table('products')->get();
        // return view('listDatabseView/users', ['data'=> $data]);

        //Pagination
        // $data = DB::table('products')->paginate(3);
        // return view('listDatabseView/users', ['data'=> $data]);

        //Model relation  with controller
       // return Product::all();

       //Model with an aggregation 
        // return Product::where('name', 'Shoe')->get();
        // return Product::find(4);//work with id only
        //return Product::find([4,5]);// using array to fetch multiple data
        //return Product::first();// to get first result
        //return Product::max('id');// to get max id
        //return Product::min('id');// to get min id
        //return Product::avg('id');// to get average id
        //return Product::sum('id');// to get sum id
        return Product::count('id');// to get count result
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
