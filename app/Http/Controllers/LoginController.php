<?php
namespace App\Http\Controllers;

class LoginController extends Controller{
    
 
    public function showLogin(){
       
        return view('user/login');
        
    }
    
    public function processLogin(){
        
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        
        if($username == "admin" && $password == "admin"){
             return redirect('/');
        }else{
            return "Gak Boleh Masuk Dab!!";
        }
        
    }
    
}