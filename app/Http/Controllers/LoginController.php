<?php
namespace App\Http\Controllers;

class LoginController extends Controller{
    
 
    public function showLogin(){
       
        return view('user/login');
        
    }
    
    public function processLogin(){
        
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        
        if($username == "asu" && $password == "tenanan"){
            return "Masuk Dab!!";
        }else{
            return "Gak Boleh Masuk Dab!!";
        }
        
    }
    
}