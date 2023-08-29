<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_addresses = Address::all();
        return view('admin.address.address_list',compact('all_addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.address.add_new_address');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Address::create([
           'ein_no' => $request->get('ein_no'),
           'college_code' => $request->get('college_code'),
           'school_code' => $request->get('school_code'),
           'phone' => $request->get('phone'),
           'address' => $request->get('address'),
        ]);
        if ($result)
        {
            return back()->with('success','Added Successfully');
        }
        else
        {
            return back()->with('error','Failed To Add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Address::find($id);
        return json_encode($res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //return $request;

        $id = $request->get('address_id');
        $result = Address::find($id)->update(
            [
                'ein_no' => $request->get('ein_no'),
                'college_code' => $request->get('college_code'),
                'school_code' => $request->get('school_code'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
            ]
        );
        if ($result)
        {
            return back()->with('success','Added Successfully');
        }
        else
        {
            return back()->with('error','Failed To Add');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Address::find($id)->delete();
        if ($res)
        {
            return back()->with('success',' Successfully Deleted');
        }
        else
        {
            return back()->with('error','Failed To Delete');
        }
    }
}
