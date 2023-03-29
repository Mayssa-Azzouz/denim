<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user()
    {
         $data=user::all();
        return view('gestUtilisateurs',compact('data'));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function updateuser(Request $request,$id){

        $data = user::find($id);
        
      
        $data->name = $request->name;
        $data->email = $request->email;
       

      
        
        $data->save();

        return redirect()->back();

    }
    
    public function viewupdateuser($id)
    {
        $data = user::find($id);

        return view('updateUser',compact('data'));
    }


}
