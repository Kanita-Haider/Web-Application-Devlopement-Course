<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.index');
    }

    // public function afroja(){
    //     echo "This is Afroja Naiym";
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function all()
    {   
        // $tasfia=DB::table('students')->get();
        // return view('admin.all',compact('tasfia'));
        $arnob=DB::table('students')->get();
        return view('admin.all', compact('arnob') );


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.create');
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
        'firstName' => 'required|max:25|min:3',
        'lastName' => 'required|max:25|min:3',
        'email' => 'required|unique:students',
    ]);

        $data=array();
        $data['firstName']=$request->firstName;
        $data['lastName']=$request->lastName;
        $data['email']=$request->email;

        // print_r($request->input('check'));
        // die();

        $arraytosting=implode(',', $request->input('check'));

       $data['restore']=$arraytosting;

       $catagory= DB::table('students')->insert($data);

       if ($catagory) {
          return redirect()->route('all');
       }
       else{
        return redirect()->route('create');
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
        $edit=DB::table('students')->where('id', $id)->first();
        return view('admin.edit')->with('edit',$edit);

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
        $validatedData = $request->validate([
        'firstName' => 'required|max:25|min:3',
        'lastName' => 'required|max:25|min:3',
        'email' => 'required',
    ]);

        $data=array();
        $data['firstName']=$request->firstName;
        $data['lastName']=$request->lastName;
        $data['email']=$request->email;

        $update=DB::table('students')->where('id', $id)->update($data);
        if ($update) {
           $notification = array(
                'message' => 'Information Update successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('all')->with($notification);
        }
        else{
             $notification = array(
                'message' => 'Information Update Failed!',
                'alert-type' => 'success'
            );
            return redirect()->route('all')->with($notification);
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
        $delete=DB::table('students')->where('id',$id)->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Information Delete successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('all')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Information Delete successfully!',
                'alert-type' => 'error'
            );
            return redirect()->route('all')->with($notification);
        }
    }
}
