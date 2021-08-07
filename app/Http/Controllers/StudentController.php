<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// we import  DB for using query builder
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();

        return view('home', ['data' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('students')->insert([
            'name' => $request->name,
            'city' => $request->city,
            'number' => $request->number,
            'email' => $request->email,
        ]);

        return redirect(route('index'))->with('status','Data Added !!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('students')->find($id);
        return view('editform',['edata' => $student]);
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
        DB::table('students')->where('id',$id)->update([
            'name' => $request->name,
            'city' => $request->city,
            'number' => $request->number,
            'email' => $request->email,
        ]);

        return Redirect(url( "/edit/".$id ))->with('editstatus', 'Edit Successful !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect(route('index'))->with('status', 'Data Deleted !!');
    }
}
