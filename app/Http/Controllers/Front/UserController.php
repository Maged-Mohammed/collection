<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showAdminName(){
        return "maged mohamed";
    }
    public function getIndix(){
        /*$data=[];
        $data['id']=5;
        $data['age']=24;
        $data['name']='maged mohamed';*/
        $obj=new \stdClass();
        $obj ->name='maged';
        $obj ->id='7';
        $obj ->gender='male';
          return view('welcome',compact('obj'));
    }

}
