<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Cookie;
use Illuminate\Support\Facades\Log;

class AuthenticationController extends Controller
{
    public function signin(){
        return view('admin.auth.signin');
    }



    public function login(Request $request){
              //   dd($request);
            $URL  = baseUrl().'/api/login';
            try{
                $result  =  Http::post($URL,
                    [
                        'email'=>$request->email,
                        'password'=> $request->password
                    ]
                );
                $result = json_decode($result);

                // dd($result);
                
                $class  =  'success';
                if($result->error == 'true'){
                    Session::flash('alert-danger',' '.$result->message);
                    return back()->withInput();
                }
    
                $permissions = [];
                foreach($result->permissions as $permission){
                $permissions[]= $permission->permission;
    
                }
                $permissions = json_encode($permissions);
                $permissions = cookie('permissions', $permissions, 300);
                $token = cookie('token', $result->access_token, 300);
                $role = cookie('role', $result->user->role->name, 300);
                $fullname = cookie('fullname', $result->user->first_name.' '.$result->user->middle_name.' '.$result->user->last_name, 3000);
                
                Session::flash('alert-'.$class,' '.$result->message);
                return redirect('dashboard')->withCookies([$token,$permissions,$fullname,$role]);
                return redirect('dashboard');
    
            } catch (\Throwable $exception){
                
                Session::flash('alert-danger',' Server error ');
    
                return redirect('/system')->withInput();
            }
    
    }




    public function logout(){
        
        try{

        $api = baseUrl().'/api/logout';

        $result = Http::withToken(token())->get($api);

        $result = json_decode($result);

        $class  =  'success';
        if($result->error == 'true'){
            Session::flash('alert-danger',' '.$result->message);
            return redirect('/system');
        }

        $token = Cookie::forget('token');
        $fullname = Cookie::forget('fullname');
        $permissions = Cookie::forget('permissions');
        $role = Cookie::forget('role');

        Session::flash('alert-success',''.$result->message);

        return redirect('/system')->withCookie($permissions)->withCookie($token)->withCookie($fullname)->withCookie($role);
      
        } catch (\Throwable $exception){
                    
            Session::flash('alert-danger',' Server error ');

            return redirect('/system')->withInput();
        }
    }
}
