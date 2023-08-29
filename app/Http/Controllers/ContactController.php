<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Contact_Page;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_contacts = Contact::all();
        return view('admin.contact.contact_list',compact('all_contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.add_new_contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->get('email');
        $phone = $request->get('phone');
        $website = $request->get('website');

        $result = Contact::create([
            'email' => $email,
            'phone' => $phone,
            'website' => $website,
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Contact::find($id);
        return json_encode($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $result = Contact::find($request->get('contact_id'))->update([
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'website' => $request->get('website')
        ]);
        if ($result)
        {
            return back()->with('success','Updated Successfully');
        }
        else
        {
            return back()->with('error','Failed To Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check  = Contact::find($id);

        if (!empty($check))
        {
            Contact::find($id)->delete();
            return back()->with('success','Deleted Successfully');
        }
        else
        {
            return back()->with('error','Failed To Update');

        }
    }
    public function destroy_message($id)
    {
        $check  = Contact_Page::find($id);

        if (!empty($check))
        {
            Contact_Page::find($id)->delete();
            return back()->with('success','Deleted Successfully');
        }
        else
        {
            return back()->with('error','Failed To Update');

        }
    }


    public function save_message(Request $request)
    {
        Contact_Page::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);
        return back()->with('success','Message Sent');
    }


    public function view_message()
    {
        $all_contacts = Contact_Page::query()->select('*')->orderBy('id','DESC')->get();

        return view('admin.contact.contact_page_list',compact('all_contacts'));
    }
}
