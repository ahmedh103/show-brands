<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;
use Image;
use Auth;
class HomeController extends Controller
{
    public function HomeSlider(){
$sliders =Slider::latest()->get();
return view('admin.slider.index',compact('sliders'));



    }

    public function AddSlider(){


        return view('admin.slider.create');
    }


public function StoreSlider(Request $request){

    $slider_image = $request->file('image');


 
    $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
    Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);
    $last_img = 'image/slider/'.$name_gen;


Slider::insert([
'title'=>$request->title,
'description'=>$request->description,
'image'=>$last_img,
'created_at'=>Carbon::now()
]);
return Redirect()->route('home.slider')->with('success','Slider  Inserted successfully');

    }


    public function Edit($id){

        $slider= Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
        
        
            }


            public function update(Request $request ,$id){
         
            $old_image = $request->old_image;
               $image = $request->file('image');
            
               if($image ){
                $name_gen = hexdec(uniqid());
                $img_ext = strtolower( $image->getClientOriginalExtension());
                $img_name  =  $name_gen.'.'.  $img_ext;
                $up_location = 'image/slider/';
                $last_img = $up_location.$img_name;
                $image->move($up_location,$last_img);
             
         //       unlink($old_image);
             Slider::find($id)->update([
             'title'=>$request->title,
             'description'=>$request->description,
             'image'=>$last_img,
             'created_at'=>Carbon::now()
             ]);
             return Redirect()->back()->with('success','brand update successfully');
            
            
               }else{
            
                Slider::find($id)->update([
                    'title'=>$request->title,
                    'description'=>$request->description,
                    
                    'created_at'=>Carbon::now()
                    ]);
                    return Redirect()->back()->with('success','brand update successfully');
            
            
               }




            }

            public function  Delete($id){
                $image =Slider::find($id);
                $old_image =$image->image;
                unlink($old_image);
                
                
                    Slider::find($id)->delete();
                    return Redirect()->back()->with('success','brand Delete successfully');
                
                }


        }