<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){

        return view('registration');
       }  

       
    public function store(Request $request){
          
    
        $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed']

      ]);

              $User = new User();  
              $User->email = $request->email;
              $User->name = $request->name;  
              $User->password = Hash::make($request->password);
              $User->save();

              return redirect()->route('user.login')->with("success",'User registered successfully please login now');
     
       }

        public function loginpage(){

        return view('login');
       
       } 

       public function logout(){

             Auth::logout();
             return view('login');
       
       } 

    
    public function login(Request $request)
    {   
   

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
        
                return redirect()->route('admin');  
        }
        else{

             return redirect()->route("user.login")
                              ->with("error",'Email-Address And Password Are Wrong.');
            
        }
    
    }

}

