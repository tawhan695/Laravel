<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

class BoradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::select('SELECT * FROM web_board_posts'); 
        return view('borad',['board_posts'=>$data]);
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

         $img = $request->file('img_car')->store('public');
         
      // Storage::disk('local')->put('public/'.strval($toname).'.png',$request->img_post);
        $id = DB::table('web_board_posts')->insertGetId([
            'web_board_posts_name'=>session()->get('user-login')->Member_name.' '.session()->get('user-login')->Member_last_name,
            'Web_board_posts_name_post'=>$request->title,
            'Web_board_imge'=>str_replace("public","storage", $img),
            'status'=>'1',
            'Web_board_message'=>$request->text,
            'massages_date'=>date("Y/m/d"),
            'massages_time'=>date("h:i:s"),
        ]);
        return redirect('/borad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = DB::select('SELECT * FROM web_board_posts WHERE web_board_posts_id = :num ',['num'=>$id]); 
        return view('view_post',['board_posts'=>$data]);
        
    }


    public function comment(Request $request){
       
       $data = DB::select('SELECT id,text,id_post,Time ,member.Member_name , member.Member_last_name FROM `comment` INNER JOIN member ON id_member=member.Member_id WHERE id_post=:id ORDER BY comment.Time ASC',['id'=>$request->id]);
        return response()->json(['success'=>$data]);
    }
    public function addComment(Request $request){
        $comm = DB::table('comment')->insertGetId([   //[บันทึกคอมเม้น]
            'text'=>$request->text ,
            'id_member'=>$request->session()->get('user-login')->Member_id ,
            'id_post'=>$request->id ,
        ]);
        $data = DB::select('SELECT id,text,id_post,Time ,member.Member_name , member.Member_last_name FROM `comment` INNER JOIN member ON id_member=member.Member_id WHERE id_post=:idp AND id =:id',['idp'=>$request->id,'id'=>$comm]);
        return response()->json(['success'=>$data,'in'=>$comm]);
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
