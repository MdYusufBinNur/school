<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$all = Gallery::find(1);
        //return $all->category;

        $all_galleries = Gallery::paginate(8);
        // return $all_galleries;
        return view('admin.gallery.gallery_list',compact('all_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.gallery.gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]
     */
    public function store(Request $request)
    {
        if (!empty( $request->gallery_image))
        {
            /*  foreach($request->gallery_image as $image)
              {

                  $fileType    = $image->getClientOriginalExtension();
                  $imageName   = rand().'.'.$fileType;
                  $directory   = 'Gallery_Images/';
                  $imageUrl    = $directory.$imageName;
                  Image::make($image)->save($imageUrl);

                  $data[] = $imageUrl;
  //                $name=$image->getClientOriginalName();
  //                $image->move(public_path().'/images/', $name);
  //                $data[] = $name;
              }*/

            $data[] = $request->gallery_image;

            $gallery = new Gallery();
            $gallery->gallery_title = $request->get('gallery_title');

            $gallery->gallery_images = json_encode($request->gallery_image);
            $gallery->save();

            return back()->with('success','Images Added Successfully');
        }
        else
        {
            return back()->with('error','No Images');
        }
//        if ($request->hasFile('gallery_image'))
//        {
//            foreach($request->file('gallery_image') as $image)
//            {
//
//                $fileType    = $image->getClientOriginalExtension();
//                $imageName   = rand().'.'.$fileType;
//                $directory   = 'Gallery_Images/';
//                $imageUrl    = $directory.$imageName;
//                Image::make($image)->save($imageUrl);
//
//                $data[] = $imageUrl;
//
//            }
//
//            $gallery = new Gallery();
//            $gallery->gallery_title = $request->get('gallery_title');
//
//            $gallery->gallery_images = json_encode($data);
//            $gallery->save();
//
//            return back()->with('success','Images Added Successfully');
//        }
//        else
//        {
//            return back()->with('error','No Images');
//        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$res = Gallery::all()->with(category);
        $res = Gallery::find($id);
        return json_encode($res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $gal_id = $request->get('gallery_id');
        $req_img = $request->get('gallery_image');
        $check_old = Gallery::find($gal_id);
        $old_img = $check_old->gallery_images;
        $items = array();



        if (!empty($request->get('gallery_image')))
        {
            foreach ($req_img as $r_img)
            {
                $items[] = $r_img;
            }
            foreach (json_decode($old_img) as $o_img)
            {
                $items[] = $o_img;
            }
            Gallery::find($gal_id)->update([

                'gallery_title' => $request->get('gallery_title'),
                'gallery_images' =>  json_encode($items)
            ]);
        }
        else
        {
            Gallery::find($gal_id)->update([

                'gallery_title' => $request->get('gallery_title'),
            ]);
        }

        //return $request;
       /* $gal_id = $request->get('gallery_id');
        $check_old = Gallery::find($gal_id);
        if ($request->file('gallery_image'))
        {
            foreach($request->file('gallery_image') as $image)
            {
                if (!empty($check_old)) {

                    foreach (json_decode($check_old->gallery_images) as $img)
                    {
                        File::delete($img);
                    }
                }

                $fileType    = $image->getClientOriginalExtension();
                $imageName   = rand().'.'.$fileType;
                $directory   = 'Gallery_Images/';
                $imageUrl    = $directory.$imageName;
                Image::make($image)->save($imageUrl);
                $data[] = $imageUrl;

            }

            Gallery::find($gal_id)->update([
                'gallery_title' => $request->get('gallery_title'),
                'gallery_images' =>  json_encode($data)
            ]);


        }
        else
        {
            Gallery::find($gal_id)->update([

                'gallery_title' => $request->get('gallery_title'),
            ]);
        }*/


        //return $check_old->gallery_images;



        return back()->with('success','Images Updated Successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery_item = Gallery::find($id);

        if (!$gallery_item)
        {
            return back()->with('error','Failed To Delete');
        }
        else{

            foreach (json_decode($gallery_item->gallery_images) as $image)
            {
                File::delete($image);
            }

            Gallery::find($id)->delete();
            return back()->with('success','Data Deleted');
        }
    }


    public function test()
    {
        $all_categories = Category::all();
        return view('admin.test.test',compact('all_categories'));
    }
    public function store_test(Request $request)
    {

        return $request;
    }

    public function test_crud(Request $request)
    {
        $file = $request->file('file');
        $fileType    = $file->getClientOriginalExtension();
        $imageName   = rand().'.'.$fileType;
        $directory   = 'Gallery_Images/';
        $imageUrl    = $directory.$imageName;
        Image::make($file)->save($imageUrl);


        return response()->json([
            'name'          => $imageUrl,
            'original_name' => $file->getClientOriginalName(),
        ]);

    }

    public function delete_selected_image(Request $request)
    {

        $id = $request->input('data_id');
        $name = $request->input('name');
        $check_old = Gallery::find($id);
        $items = array();
        foreach (json_decode($check_old->gallery_images) as $img)
        {
            if ($img === $name)
            {

                File::delete($img);

                //return json_encode($img);
            }
            else
            {
                $items[] = $img;
            }

        }
        Gallery::find($id)->update([
            'gallery_images' => json_encode($items),

        ]);
        $res = Gallery::find($id);
        return json_encode($res);
        //$input = $request->all();
        //return response()->json('Success','Success');
    }


}
