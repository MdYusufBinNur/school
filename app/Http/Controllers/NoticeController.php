<?php

namespace App\Http\Controllers;

use App\CornerMessage;
use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_notices = Notice::query()->select('*')->orderBy('id','DESC')->paginate(10);
        return view('admin.notice.notice_list',compact('all_notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.add_new_notice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('image');
//        pathinfo($image, PATHINFO_EXTENSION);
//
//        $uniqueFileName = uniqid() . $request->file('image')->getClientOriginalName();
//
//        $request->get('upload_file')->move(public_path('files') . $uniqueFileName);

        if (empty($request->get('notice_title')))
        {
            $details = null;
        }
        else
        {
            $details =  $request->get('notice_title');
        }
        if (!empty($image))
        {
            $fileType    = $image->getClientOriginalExtension();
            $imageName   = rand().'.'.$fileType;
            $path_info = pathinfo($imageName, PATHINFO_EXTENSION);
            $directory   = 'Notice_Images/';
            if ($path_info == 'pdf' || 'docx')
            {
                $imageUrl   = $directory.$imageName;
                //return $imageUrl;
                $image->move($directory,$imageName);
            }
            else{
                $imageUrl    = $directory.$imageName;
                Image::make($image)->save($imageUrl);
            }

        }
        //return $request->file('image');
        else
        {
            $imageUrl = null;
        }

        $result = Notice::create([
           'title' => $request->get('notice_title'),
           'date' => $request->get('date'),
           'notice_details' => $details,
            'image' => $imageUrl
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
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Notice::find($id);
        return json_encode($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('notice_id');
        $old_val = Notice::find($id);
        $image = $request->file('image');
        if (empty($request->get('notice_title')))
        {
            $details = $old_val->notice_title;
        }
        else
        {
            $details = $request->get('notice_title');
        }
        if (!empty($image))
        {
            File::delete($old_val->image);
            $fileType    = $image->getClientOriginalExtension();
            $imageName   = rand().'.'.$fileType;
            $path_info = pathinfo($imageName, PATHINFO_EXTENSION);
            $directory   = 'Notice_Images/';
            if ($path_info == 'pdf' || 'docx')
            {
                $imageUrl   = $directory.$imageName;
                //return $imageUrl;
                $image->move($directory,$imageName);
            }
            else{
                $imageUrl    = $directory.$imageName;
                Image::make($image)->save($imageUrl);
            }
//            $imageUrl    = $directory.$imageName;
//            Image::make($image)->save($imageUrl);
        }
        else
        {
            $imageUrl = $old_val->image;
        }

        $result = Notice::find($id)->update([
            'title' => $request->get('notice_title'),
            'date' => $request->get('date'),
            'notice_details' => $details,
            'image' => $imageUrl
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
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = Notice::find($id);

        //dd($about);
        if (!$about)
        {
            return back()->with('error','Failed To Delete');
        }
        else
            {
            File::delete($about->image);
            Notice::find($id)->delete();
            return back()->with('success','Data Deleted');
        }
    }
}
