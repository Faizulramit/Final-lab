<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;

class adminController extends Controller
{
    //
    function index(){
        return view('admin.index');
    }
    function addcatagory(){
        return view('admin.addcatagory');
    }

    function storecatagory(Request $request){
        $catagory = new book();
        $catagory->catagoryname = $request->catagoryname;
        $catagory->categories = $request->categories;
        $catagory->author = $request->author;
        $catagory->price = $request->price;
        $catagory->description = $request->description;
        if($catagory->save()){
           $request->session()->flash('msg','Successful');
            return redirect()->route('admin.addcatagory');
        }
        else{
           $request->session()->flash('msg','Failed');
           return redirect()->route('admin.addcatagory');
        }
    }

    function userlist(){
        return view('admin.userlist');
    }

}
