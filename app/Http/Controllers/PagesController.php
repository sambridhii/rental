<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Symfony\Component\Translation\Loader\IcuResFileLoader;

class PagesController extends Controller
{
    public function home()
    {
        $data = [
            'username' => "SambridhiNeupane"
        ];
        return view('profile')->with($data);
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request){

       $house = new House();
       $house->location=$request->location;
        $house->Contact=$request->Contact;
        $house->Numberofroom = $request->Numberofroom;
        $img = Image::make ($request -> file('image'));
        $filename = $request -> file('image') ->getClientOriginalName();
        $img -> save('storage/image/'. $filename);
        $house -> image = $filename;

        $house->save();
        return redirect('/list');

    }
public function list(){
        $houses = house::get();
        return view(view: 'list')->with('house', $houses);

    }

    public function edit($id){
        $house = House::where('id',$id)->get();
        return view('update')->with('house',$house);
    }



}
