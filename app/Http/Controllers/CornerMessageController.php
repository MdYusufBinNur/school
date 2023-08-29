<?php

namespace App\Http\Controllers;

use App\CornerMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CornerMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_messages = CornerMessage::all();
        return view('admin.message.message_list',compact('all_messages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.message.add_new_message');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $image = $request->file('image');
        if (!empty($image))
        {
            $fileType    = $image->getClientOriginalExtension();
            $imageName   = rand().'.'.$fileType;
            $directory   = 'Message_Images/';
            $imageUrl    = $directory.$imageName;
            Image::make($image)->save($imageUrl);
        }
        //return $request->file('image');
        else
        {
            $imageUrl = null;
        }
        $result = CornerMessage::create([
            'name' => $request->get('name'),
            'designation' => $request->get('designation'),
            'group' => $request->get('group'),
            'message' => $request->get('message'),
            'image' => $imageUrl,
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
     * @param  \App\CornerMessage  $cornerMessage
     * @return \Illuminate\Http\Response
     */
    public function show(CornerMessage $cornerMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CornerMessage  $cornerMessage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = CornerMessage::find($id);
        return json_encode($res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CornerMessage  $cornerMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // return $request;

        $id = $request->get('message_id');
        $old_val = CornerMessage::find($id);
        $image = $request->file('image');
        if (!empty($image))
        {
            File::delete($old_val->image);
            $fileType    = $image->getClientOriginalExtension();
            $imageName   = rand().'.'.$fileType;
            $directory   = 'Message_Images/';
            $imageUrl    = $directory.$imageName;
            Image::make($image)->save($imageUrl);
        }
        else
        {
            $imageUrl = $old_val->image;
        }

        $result = CornerMessage::find($id)->update([
            'name' => $request->get('name'),
            'designation' => $request->get('designation'),
            'group' => $request->get('group'),
            'message' => $request->get('message'),
            'image' => $imageUrl,
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
     * @param  \App\CornerMessage  $cornerMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = CornerMessage::find($id);

        if (!$about)
        {

            return back()->with('error','Failed To Delete');
        }
        else{
            File::delete($about->title_image);
            CornerMessage::find($id)->delete();
            return back()->with('success','Data Deleted');
        }
    }
}
