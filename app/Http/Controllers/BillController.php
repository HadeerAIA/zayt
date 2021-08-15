<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->orderBy('created_at','DESC')->get();
        $bill = Bill::all();
        return view("profile", ["bills"=>$bill]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("bill");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'country'=>'required',
            'source'=>'required',
            'quantity'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'bill'=>'required'
        ]);

        //$user_id = Auth::id();

        // dd($user_id);

        Bill::create([
            "fname"=>$request["fname"],
            "lname"=>$request["lname"],
            "address"=>$request["address"],
            "country"=>$request["country"],
            "source"=>$request["source"],
            "quantity"=>$request["quantity"],
            "phone"=>$request["phone"],
            "date"=>$request["date"],
            "bill"=>$request["bill"]
            
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
    
    
}
