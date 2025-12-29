<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {

        $slider = Slider::paginate(5);
        return view('panel.sliders',['slider'=>$slider]);

    }


    public function create()
    {
        return view('panel.createSlider');
    }


    public function store(createSliderRequest $request)
    {
        $file = $request->file('image');

        $image = "";
        if(!empty($file)){
            $image = md5(time()).".".$file->getClientOriginalExtension();

            $file->move('images/slider',$image);
        }
        Slider::create([
            'header' => $request->header,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image
        ]);
        session()->flash('create_slider','ساخت بنر موفقیت آمیز بود ');
        return redirect()->route('slider.index');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('panel.updateslider',compact('slider'));
    }


    public function update(updateSliderRequest $request, $id)
    {
        $file = $request->file('image');
        $last_image = Slider::findOrFail($id)->image;
        $image = "";
        if(!empty($file)){
            if(file_exists('images/slider/'.$last_image)){
                unlink('images/slider/'.$last_image);
            }
            $image = md5(time()).'.'.$file->getClientOriginalExtension();
            $file->move('images/slider',$image);
    }else{
        $image = $last_image;
    }
    Slider::findOrFail($id)->update([
        'title' =>$request->title ,
        'header' => $request->header ,
        'description' => $request->description,
        'image' => $image
    ]);
    session()->flash('update_slider','ویرایش انجام شد ');
    return redirect()->route('slider.index');
}


    public function destroy($id)
    {
        $delete_image = Slider::findOrFail($id)->image;
        if(file_exists('images/slider/'.$delete_image)){

            unlink('images/slider/'.$delete_image);

        }
        Slider::destroy($id);
        session()->flash('delete_slider','بنر مورد نظر حذف شد ');
        return back();


    }
}
