<?php

namespace App\Http\Controllers;

use App\SocialLinker;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SocialLinkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_linkers = SocialLinker::all();
        return view('admin.social_linkers.linker_list',compact('all_linkers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social_linkers.add_new_linker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $image = $request->file('linker_icon');
        if (!empty($image))
        {
            $fileType    = $image->getClientOriginalExtension();
            $imageName   = rand().'.'.$fileType;
            $directory   = 'Social_Icon/';
            $imageUrl    = $directory.$imageName;
            Image::make($image)->save($imageUrl);
        }
        //return $request->file('image');
        else
        {
            $imageUrl = null;
        }


        $result = SocialLinker::create([
            'social_icon' =>$imageUrl,
            'name' => $request->get('linker_name'),
            'social_link' => $request->get('link'),
        ]);

        if ($result)
        {
            return back()->with('success','Data Inserted Successfully');
        }
        else
        {
            return back()->with('error',' Failed to insert data');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialLinker  $socialLinker
     * @return \Illuminate\Http\Response
     */
    public function show(SocialLinker $socialLinker)
    {
        //
    }

    public function edit($id)
    {
        $result = SocialLinker::find($id);
        return json_encode($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialLinker  $socialLinker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialLinker $socialLinker)
    {
        $image = $request->file('linker_icon');
        $old_category_info =  SocialLinker::find($request->linker_id);

        if (!empty($image)){

            File::delete($old_category_info->social_icon);

            $fileType    = $image->getClientOriginalExtension();
            $imageName   = rand().'.'.$fileType;
            $directory   = 'Social_Icon/';
            $imageUrl    = $directory.$imageName;
            Image::make($image)->save($imageUrl);

            $result = SocialLinker::find($request->linker_id)->update([
                'social_icon' =>$imageUrl,
                'name' => $request->get('linker_name'),
                'social_link' => $request->get('link'),
            ]);
        }
        else
        {
            $result =SocialLinker::find($request->linker_id)->update([
                'name' => $request->get('linker_name'),
                'social_link' => $request->get('link'),
            ]);
        }

        if ($result)
        {
            return back()->with('success','Updated Successfully');
        }
        else
        {
            return back()->with('error','Failed To Update');
        }

    }


    public function destroy($id)
    {
        $linker_item = SocialLinker::find($id);

        if (!$linker_item)
        {

            return back()->with('error','Failed To Delete');
        }
        else{
            File::delete($linker_item->social_icon);
            SocialLinker::find($id)->delete();
            return back()->with('success','Data Deleted');
        }
    }
}
