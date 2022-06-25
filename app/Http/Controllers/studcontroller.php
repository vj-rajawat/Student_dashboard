<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Image;

class studcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function fetch()
    {
        $student = DB::select('select * from student');
        //dd($student); 
        return view('all-students', ['student' => $student]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // if($request->file('mypic')){                                     // Uploading Registration photo
        //     $tmpFilePath = public_path('/assets/images/profile-pic');
        //     // echo $tmpFilePath; die();
        //     $p_hadPath ='reg-photo_'.time();
        //     $img = Image::make($request->file('mypic'));
        //     $img->save($tmpFilePath.$p_hadPath.'.jpg');
        //     $reg_photo = $p_hadPath.'.jpg';
        // }
        if($request->hasfile('mypic')){
            $file = $request->file('mypic');
            $filepath = "/storage/app/".$file->store('images');
        }


        $data = DB::table('student')->insert([
        'photo'=> $filepath,
        'name'=> $request->myname,
        'gender'=> $request->mygend,
        'class'=> $request->myclass,
        'section'=>$request->mysec,
        'father'=> $request->myprnt,
        'address'=>$request->myadd,
        'dob'=>$request->mydob,
        'phone'=> $request->myphone,
        'email' => $request->myemail
        ]);
        return redirect('all-students');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = DB::table('student')->where('rollno', $id)->first();
        return view('edit', ['data' => $data]);
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
        if($request->hasFile('photo')){
            $newfile = $request->file('photo');


     $filepath = "/storage/".$newfile->store('images');
        $data = DB::table('student')->where('rollno', $id)->update([
        'photo'=>$request->mypic,
        'name'=> $request->myname,
        'gender'=> $request->mygend,
        'class'=> $request->myclass,
        'section'=>$request->mysec,
        'father'=> $request->myprnt,
        'address'=>$request->myadd,
        'dob'=>$request->mydob,
        'phone'=> $request->myphone,
        'email' => $request->myemail
        ]);
        
    }
    return redirect('all-students');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('student')->where('rollno', $id)->delete();

        return redirect('all-students');
    }
}
