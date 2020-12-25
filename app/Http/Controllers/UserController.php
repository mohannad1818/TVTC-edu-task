<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function edit(){
        if(Auth::user()){
       $user=User::find(Auth::user()->id);
       if($user){
       return view('user.edit')->withUser($user);
       }else{
        return redirect()->back();

       }

        }else{
            return redirect()->back();
        }

    }
    public function update(Request $request){
       $user =User::find(Auth::user()->id);

       if($user){
           $validate = null;
           if(Auth::user()->email ===$request['email'] ){
            $validate = $request->validate([
                'gender' => 'required',
                //'name' => 'required|min:2',
                //'email' => 'required|email'
            ]);
            
           }else{

            $validate = $request->validate([
                'gender' => 'required',
                
                //'name' => 'required|min:2',
                //'email' => 'required|email|unique:users'
            ]);
           }
           if($validate){
          // $user->name = $request['name'];
           //$user->email = $request['email'];
           $user->gender = $request['gender'];


           $user->save();
           $request->session()->flash('success','Your details have now been update!');
           return redirect()->back();
           }else{
            return redirect()->back();

           }

       }else{
           return redirect()->back();

       }


    }
    public function passowrdUpdate(){


    }
    public function passwordEdit(){


    }
    public function profile($id){
        $user= User :: find($id);
        if($user){
         return view('user.profile')->withUser($user);

        }else {
return redirect()->back();
        }

    }
}
