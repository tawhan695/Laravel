<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mamber;
class UserController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
      [
        'fnatitle_nameme'=>'required',
        'fname'=>'required',
        'Lname'=>'required',
        'birth'=>'required',
        'heiht'=>'required',
        'uname'=>'required',
        'pswd'=>'required',
        'email'=>'required',
       ]);
        $mamber = new mamber([
            'Member_titel' => $request->get('title_name'),
            'Member_name' => $request->get('fname'),
            'Member_last_name'=> $request->get('Lname'),	
            'Date_birth'=> $request->get('birth'),	
            'Member_age'=> $request->get('age'),	
            'End_heiht'=> $request->get('heiht'),	
            'Member_username'=> $request->get('uname'),	
            'Member_password'=> $request->get('pswd'),	
            'Member_email'=> $request->get('email')
        ]);
        if(!$mamber->save()){
        return redirect()->route('/')->with('success','บันทึกข้อมูนเรียบร้อย');
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

    public function check_user(Response $request){
           
    }
}
