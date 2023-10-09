<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Cookie;
use Illuminate\Support\Facades\Log;

class MembersController extends Controller
{
    public function index(){


              //   dd($request);
              $URL  = baseUrl().'/list-members';
              try{
                  $result  =  Http::post($URL);
                  $members = json_decode($result);
                //   dd($result);
                  
                  return view('admin.members.index', compact('members'));
      
              } catch (\Throwable $exception){
                  
                  Session::flash('alert-danger',' Server error ');
      
                  return back('/')->withInput();
              }


    }
}
