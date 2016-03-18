<?php
namespace App\Http\Controllers;

class VersionController extends Controller{
    
    
    public function version(){
        
        $laravel = app();
        $version = $laravel::VERSION;
        var_dump($version);
    }
    
}