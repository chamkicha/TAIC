<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Toastr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class homeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function register($isReg){

        $isReg = $isReg;
        $sectors = sector();
        $professional_categories = professional_category();
        $regions = regions();
        $countries = countries();
        // dd($countries);
        return view('register.form',compact('isReg','sectors','professional_categories','regions','countries'));
    }

    public function processRegistrationNumber(Request $request)
    {
        $URL  = baseURL().'/process-regno';      
        try{
        $result  =  Http::post($URL,
            ['reg_no'=>$request->reg_no]
        );
        $result = json_decode($result);
        if ($result->error==1)
                {
                    $responseData = [
                        'statusCode' => 400,
                        'reg_no' => $request->reg_no,
                        'message' => $result->message
                        ];
                    return response()->json($responseData, Response::HTTP_OK);
                }
            $responseData = [
                'statusCode' => 200,
                'reg_no' => $request->reg_no,
                'data'  => $result->member_data,
                'message' => 'successfully get data'
                ];
            return response()->json($responseData, Response::HTTP_OK);
        }catch (Exception $error) {
            return response()->json([
                'statusCode' => 402,
                'message' => 'something went wrong.',
                'error' => $error,
            ]);
        }
    }

    public function memberDetails($reg_no)
    {


        $URL  = baseURL().'/process-regno';
        
       
        try{
        $result  =  Http::post($URL,
            [
                'reg_no'=>$reg_no
            ]
        );
        $result = json_decode($result);
        // dd($result);
        if ($result->error==1)
        {
            Toastr::error($result->message, 'Failed');
            return redirect()->back()->withInput();
        }
            $data  = $result->member_data;
                
            return view('professional.view',compact('data'));

        }catch (Exception $error) {
            return response()->json([
                'statusCode' => 402,
                'message' => 'something went wrong.',
                'error' => $error,
            ]);
        }


    }
    
    public function districts(Request $request){


        $URL  = baseURL().'/districts/'.$request->region_id;
        
       
        try{
        $result  =  Http::get($URL);
        $result = json_decode($result);
        
            $responseData = [
                'statusCode' => 200,
                'data'  => $result,
                'message' => 'successfully get districts'
                ];
            return response()->json($responseData, Response::HTTP_OK);

        }catch (Exception $error) {
            return response()->json([
                'statusCode' => 402,
                'message' => 'something went wrong.',
                'error' => $error,
            ]);
        }

    }

    public function wards(Request $request){


        $URL  = baseURL().'/wards/'.$request->district_id;
        
       
        try{
        $result  =  Http::get($URL);
        $result = json_decode($result);
        
            $responseData = [
                'statusCode' => 200,
                'data'  => $result,
                'message' => 'successfully get wards'
                ];
            return response()->json($responseData, Response::HTTP_OK);

        }catch (Exception $error) {
            return response()->json([
                'statusCode' => 402,
                'message' => 'something went wrong.',
                'error' => $error,
            ]);
        }

    }

    public function submitRegForm(Request $request){
        // dd($request);

        $validator = Validator::make($request->all(), [
            'first_name' =>  ['required'],
            'last_name' =>  ['required'],
            'gender' =>  ['required'],
            'institution' =>  ['required'],
            'sector_id' =>  ['required'],
            'nationality_id' =>  ['required'],
            'mobile' =>  ['required','min:3','max:12'],
            'email' =>  ['required'],
        ]);

        if ($validator->fails()) {

            $errors = implode('<br>', $validator->errors()->all());
            Toastr::error($errors, 'Field');
            return redirect()->back()->withInput();
        }


        $URL  = baseURL().'/register-ictc-member';
        if($request->nationality_id != '223'){
            $ward_id = 0;
            $street = '';

        }else{
            $ward_id = $request->ward_id;
            $street = $request->street;

        }
        try{
        $data = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'institution' => $request->institution,
            'sector_id' => $request->sector_id,
            'professional_category_id' => 5,
            'nationality_id' => $request->nationality_id,
            'residence_country_id' => $request->residence_country_id,
            'ward_id' => $ward_id,
            'street' => $street,
            'mobile' => $request->mobile,
            'email' => $request->email,

        ];
        $result  =  Http::post($URL,$data);
        $result = json_decode($result);
        // dd($result);
        if($result->error == '0'){
            Toastr::success($result->message, 'Success');
            return Redirect::route('memberDetails', ['reg_no' => $result->member_data->reg_no]);
        }else{
            Toastr::error($result->message, 'Failed');
            return redirect()->back()->withInput();

        }
            $responseData = [
                'statusCode' => 200,
                'data'  => $result,
                'message' => 'successfully Registered'
                ];
            return response()->json($responseData, Response::HTTP_OK);

        }catch (Exception $error) {
            return response()->json([
                'statusCode' => 402,
                'message' => 'something went wrong.',
                'error' => $error,
            ]);
        }

    }
    public function generateBill(Request $request){
        $URL  = baseURL().'/process-bill';
        try{
        $result  =  Http::post($URL,
            [
                'reg_no'=>$request->reg_no
            ]
        );
        $result = json_decode($result);
        
            $responseData = [
                'statusCode' => 200,
                'data'  => $result,
                'message' => 'successfully get data'
                ];
            return response()->json($responseData, Response::HTTP_OK);

        }catch (Exception $error) {
            return response()->json([
                'statusCode' => 402,
                'message' => 'something went wrong.',
                'error' => $error,
            ]);
        }
    }

    

    
}
