<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_info as db;

/*use resources\views as View;*/

class Register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = db::all()->toArray();
        return view('list',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validator = $request->validate([
            'firstname' => 'required|max:10|min:2',
            'lastname' => 'required|max:10',
            'email' =>'required|email|unique:user_infos,email'
         ]);
       /* if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }else{*/
           // $validator['password'] = bcrypt($validator['password']);
            db::create($validator);

            $data = db::all()->toArray();
            return view('list',["data"=>$data]);    

     
       // }
       
       // return View::make("list")->with($data);
        //dd($data); 
       /* foreach ($data as $p) {
            echo $p->firstname;
        }*/
       //dd($data);     
      
      //  Input::replace(['_token' => 'remember_token']);

       // dd($request->all());  

       //$pass = $request->password;
        //dd(bcrypt($pass));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = db::find($id)->toArray();
        $user["data"] = "hide";  
        return view('form',["data"=>$user]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = db::find($id)->toArray();  
        return view('form',["data"=>$user]); 
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
      
        $validator = $request->validate([
            'firstname' => 'required|max:10|min:2',
            'lastname' => 'required|max:10',
            'email' =>'required|email|unique:user_infos,email,'.$id
        ]);

        db::where('id', $id)
            ->update($validator);

        $data = db::all()->toArray();
        return view('list',["data"=>$data]);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        db::where('id', $id)
            ->delete();
        return "true"; 
    }
}
