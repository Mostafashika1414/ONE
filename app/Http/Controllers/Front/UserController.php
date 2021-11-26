<?php

namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller as Controller;


class UserController extends Controller
{
    public function showUserName (){

     return 'mostafa saeed';

     }

    public function getIndex (){

     
    $data=[];
    $data['id']=27;
    $data['name']='mostafa saeed';    
    return view('welcome',$data);
          

    }


}
