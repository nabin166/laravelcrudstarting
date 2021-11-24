<?php

namespace App\Http\Controllers;

use App\Models\usernames;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class username extends Controller
{
   

    

    public function index()
    {
        $usernames = DB::select('select * from usernames');
   
        return view('show.create',["usernames"=>$usernames]);
    }

    
    public function inde($id)
    {
        $usernames = DB::select('select * from usernames where id = ?',[$id]);
   
        return view('show.updates',["usernames"=>$usernames]);
    }






   
    public function create()
    {
    
        return view('show.create');
    }




  
    public function store(Request $request)
    {
        $request->validate(['firstname' => 'required', 'lastname' => "required"]);

        $data = new usernames;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        // DB::insert('insert into fullname (firstname, lastname) values (?, ?)', [$fname, $lname]);
        $data->save();
     

        return redirect('ind');
    }


    
  
    public function show(usernames $usernames)
    {
       //
    
    }

    public function upshow($id){
   
        $name = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $usernames =DB::update('update usernames set firstname = ? ,lastname=? where id = ?', [$name,$lname,$id]);
       

        
       
        
        return redirect('ind');
    }
    
    public function edit(usernames $usernames)
    {
        //
    }


    public function update($id)
    {
       return view('show.updates');
    }

   

    public function destroy($id)
    {
   DB::table('usernames')->where('id',$id)->delete();
        return redirect('ind');
        // echo 'got it ';
        // echo $id;
       
    }
}
