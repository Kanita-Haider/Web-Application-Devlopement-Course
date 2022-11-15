<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anjan=DB::table('students')->join('registation', 'students.id', 'registation.student_id')->select('students.*', 'registation.reg_no')->get();
        

        return view('admin.student.join', compact('anjan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DB::table('students')->get();
        return view('admin.student.registation', compact('data'));
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
        'student_id' => 'required',
        'reg_no' => 'required|max:25|min:3',
       
    ]);

        $data=array();
        $data['student_id']=$request->student_id;
        $data['reg_no']=$request->reg_no;
    


       $catagory= DB::table('registation')->insert($data);

       if ($catagory) {
          return redirect()->route('reg')->with('success', 'store successfully');
       }
       else{
        return redirect()->back('/')->with('failed', 'Store Failed');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
