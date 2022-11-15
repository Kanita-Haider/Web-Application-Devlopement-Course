<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=DB::table('teachers')->get();
        return view('admin.teacher.all', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validatedData = $request->validate([
                'firstName' => 'required|max:255|min:3',
                'lastName' => 'required|max:255|min:3',
                'email' => 'required|unique:teachers',
                'city' => 'required',
                'gender' => 'required',
                'hobby' => 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            ]);

        $hobby=$request->hobby;
      

        $chayan=implode(',', $hobby);
        // echo  $chayan;
        // die();
        

        $data=array();

        $data['firstName']=$request->firstName;
        $data['lastName']=$request->lastName;
        $data['email']=$request->email;
        $data['city']=$request->city;
        $data['gender']=$request->gender;
        $data['hobby']=$chayan;

        $image=$request->file('image');

        $new_name=hexdec(uniqid());

        $ext=strtolower($image->getClientOriginalExtension());

        $img_name=$new_name.'.'.$ext;

        $location="upload/";
        $img_url=$location. $img_name;
        $success=$image->move($location,$img_name);

        $data['image']=$img_url;



        $data=DB::table('teachers')->insert($data);

        if ($data) {
            return redirect()->route('all.teacher');

        }
        else{
             return redirect()->back('/');
        }




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
       $edit= DB::table('teachers')->where('id',$id )->first();
       return view('admin.teacher.edit', compact('edit'));
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
        

        $data=array();

        $data['firstName']=$request->firstName;
        $data['lastName']=$request->lastName;
        $data['email']=$request->email;
        $data['city']=$request->city;
        $data['gender']=$request->gender;

        $images=$request->file('image');

        if ($images) {
            
            $new_name=hexdec(uniqid());

        $ext=strtolower($images->getClientOriginalExtension());

        $img_name=$new_name.'.'.$ext;

        $location="upload/";
        $img_url=$location. $img_name;
        $success=$images->move($location,$img_name);
        unlink($request->old_images);

        $data['image']=$img_url;
        $data=DB::table('teachers')->where('id',$id)->update($data);
        return redirect()->route('all.teacher');
        }
        else{

            $data['image']=$request->old_images;
            $data=DB::table('teachers')->where('id',$id)->update($data);
            return redirect()->route('all.teacher');
        }

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images=DB::table('teachers')->first();
        $rakib=$images->image;

        $delete=DB::table('teachers')->where('id',$id )->delete();

        if ($delete) {
          unlink( $rakib);
          return redirect()->route('all.teacher');
        }
        else{
            return redirect()->route('all.teacher');
        }
    }
}
