<?php

namespace App\Http\Controllers;

use App\Models\Ask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ask = Ask::where('user_id', Auth::id())->orderBy('created_at','DESC')->get();
        return view("asks.index", ["asks"=>$ask]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("asks.create");
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
            'address'=>'required',
            'country'=>'required',
            'source'=>'required',
            'quantity'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'bill'=>'required'
        ]);

        $user_id = Auth::id();

        // dd($user_id);

        Ask::create([
            "address"=>$request["address"],
            "country"=>$request["country"],
            "source"=>$request["source"],
            "quantity"=>$request["quantity"],
            "phone"=>$request["phone"],
            "date"=>$request["date"],
            "bill"=>$request["bill"],
            "user_id"=>$user_id
        ]);
        return redirect(route("thanks"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function show(Ask $ask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function edit(Ask $ask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ask $ask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function destroy($ask)
    {
        $ask =Ask::find($ask);
        $ask->delete($ask);
        return redirect(route("Asks.index"));
    }
}
