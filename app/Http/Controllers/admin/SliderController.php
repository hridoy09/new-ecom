<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use File;
use Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        return view('admin.slider.index', compact('sliders'));

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


        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('assets/admin/slider_img'), $filename);
        }


       Slider::create([
                'image' => 'assets/admin/slider_img/'.$filename,
                'title'=>$request->title,
                'Price'=>$request->price,
                'description'=>$request->description, //create blade name;first one databASE NAME

            ]);
            return back()->with('success', 'slider added');
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
        $slider=Slider::findOrFail($id);
        return view('admin.Slider.index', compact('slider'));
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

        if($request->hasFile('image')) {
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/slider_img' ;
            $file->move($destinationPath,$fileName);
        }

        $slider=slider::findOrFail($id);
        $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->price=$request->price;
        $slider->image=$request->image;
        $slider->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slider=Slider::findOrFail($id);
       $slider->delete();
       return back();
    }
}
