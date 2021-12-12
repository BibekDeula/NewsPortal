<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tag;
use DB;

class TagController extends Controller
{
    public function index(){
        $datas=DB::table('tags')->get();
        return view('Tag.index',compact('datas'));
    }


    public function create(){
        return view('Tag.create');
    }



    public function show($id){
        $datas=DB::table('tags')->where('id','=',$id)->get();
	    return view('Tag.show',compact('datas'));
    }



    public function store(Request $request){
         $this->validate($request,[
        'id'=>'required',
            'tagName'=>'required',
            'slug'=>'required',
            
     ]);
     
        $datas=new tag;
        $datas->id=$request->input('id');
        $datas->tagName=$request->input('tagName');
        $datas->slug=$request->input('slug');
        $datas->isTrending=$request->input('isTrending');
        $datas->isVisible=$request->input('isVisible');
        $datas->save();
     return redirect('tags')->with('success','Tags added successfully');
    }
    



    public function edit($id){
        $datas=DB::table('tags')->where('id','=',$id)->first();
        return view('Tag.edit',compact('datas'));
    }



   public function update(Request $request){
     $this->validate($request,[
        'id'=>'required',
            'tagName'=>'required',
            'slug'=>'required',
            
     ]);
        $datas=tag::findOrFail($request->id);

        $datas->update([
             
            'id'=>$request->id,
            'tagName'=>$request->tagName,
            'slug'=>$request->slug,
            'isTrending'=>$request->isTrending,
            'isVisible'=>$request->isVisible ,
    
        ]);
        
        // toastr()->success('Ads has Successfully updated');
        return redirect('tags/')->with('update','form updated successfully');
    }



}
