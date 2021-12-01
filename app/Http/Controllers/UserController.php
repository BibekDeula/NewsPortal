<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use DB;
use App\Models\usercompany;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $datas=DB::table('usercompanies')->get();
       return view('company.index',compact('datas')); 
       
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas=DB::table('usercompanies')->get();
        return view('company.create',compact('datas'));
     
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'dailytarget'=>'required',
            'role_id'=>'required',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:4',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
]);         if($request->hasfile('image'))
          {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images', $filename);
            
        }
        else{
            $imageName=null;

        }
        $student = new usercompany;
        $student->fullname = $request->input('fullname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->image=$filename;
        $student->isactivated = $request->input('isactivated');
        $student->dailytarget = $request->input('dailytarget');
        $student->role_id = $request->input('role_id');

        $student->save();
        return redirect('users')->with('success','User created Successfully');
    

 

    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas=DB::table('usercompanies')->where('id','=',$id)->get();
        return view('company.show',compact('datas'));
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas=DB::table('usercompanies')->where('id','=',$id)->first();
        return view('company.edit',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request){
     
        $ads=usercompany::findOrFail($request->id);
        if($request->hasFile('image'))
        {
            $destination ='images'.$ads->image;
            if(File::exists($destination))
            {
                File:: delete($destination);
            }
            $image=$request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = time(). '.' .$extension;
            $image->move('images',$imageName);
            $ads->image=$imageName;

        }else{
            $imageName=$ads->image;
        }

        $ads->update([
             
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'password'=>$request->password,
            'image'=>$imageName,
            'dailytarget'=>$request->dailytarget,
            'role_id '=>$request->role_id ,
            'isactivated'=>$request->isactivated,
    
        ]);
        
        // toastr()->success('Ads has Successfully updated');
        return redirect('users/')->with('update','form updated successfully');
    }


    public function destroy($id)
    {
        //
    }
}
