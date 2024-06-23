<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class SliderEventController extends Controller
{
    public function SliderOurEventList()
    {
       $slider = Slider::get()->toArray();
       return view('admin.sliderEvents.slider_event_list',compact('slider'));
    }
    public function AddEditSliderEvent(Request $request)
    {

            $title = "Add";
            $SliderEvent = new Slider;
            $message = "Image Added Successfully!";
            if($request->hasFile('image'))
            {
            $allowedfileExtension=['jpg','png', 'jpeg','JPG','PNG','JPEG'];
            $files = $request->file('image');
            foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            //dd($check);
            if($check)
            {

            foreach ($request->image as $photo) {
            $filename = $photo->store('image');
            Slider::create([
            'type' => $request->type,
            'image' => $filename
            ]);
            }
            return redirect('admin/Slider-OurEventList')->with('success_message',$message);
            }
            else
            {

                return redirect('admin/Slider-OurEventList')->with('error_message',' Sorry Only Upload png , jpg');

            }
            }
            }


        return view('admin.SliderEvents.add_edit_SliderEvent',compact('SliderEvent','title'));

    }


    public function DeleteSliderEvent($id)
    {
        $imagedel = Slider::findOrFail($id);
        try {

        $image ='storage/app/'.$imagedel['image'];

        if (file_exists($image)) {
         @unlink($image);
        }
            $imagedel->delete();

            $message= "Your Image  is Delete Successfully!";
            return redirect()->back()->with('success_message',$message);
        } catch (QueryException $e){
        if($e->getCode() == "23000"){
            $message= "data cant be deleted";
            return redirect()->back()->with('error_message',$message);
        }}
    }
}
