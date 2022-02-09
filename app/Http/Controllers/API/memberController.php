<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\member;
use DB;

class memberController extends Controller
{
    public function index()
    {
        $member = Member::all(); 
        return response()->json($member);
    }


    public function Register(Request $request)
    {
     
            //add Register
            $member = new member();
            $member->email = $request->get("email"); 
            $member->username = $request->get("username"); 
            $member->password = $request->get("password");  
            $member->package  = 0;
            $member->free_trial = 0;
            //$member->exp_date = "";
            $member->save();
           
          //soft delete
          return response()->json(array(
            'message' => 'AddMember successfully', 
            'status' => 'true'));
    }

    public function login(Request $request)
    {
        $email = $request->get('username');
        $password = $request->get('password');
        $member = member::login($email,$password);
        if($member){
            $member = (array)$member;
            $member['message'] = 'success';
            $member['status'] = 'true';    
                
        }else{
            $member = array(
                'message' => 'this member is not found', 
                'status' => 'false');
        }

        return response()->json($member);
    }

    public function viewMember($id)
    {
        $sql="SELECT * FROM member WHERE member.id='$id'";
        $member=DB::select($sql)[0];        
        return response()->json($member);
    }

    public function updatemember($id)
    {
        date_default_timezone_set('Asia/Bangkok');
            $member = member::find($id);
            $member->package  = 1; 
            $member->free_trial = 1;
            $member->exp_date =Date('Y-m-d',strtotime(' +30 day'));
            $member->save();
           
          return response()->json(array(
            'message' => 'Update successfully', 
            'status' => 'true'));
    }

    public function updatememberExp($id)//หมดอายุ
    {
        $exp =false;
        date_default_timezone_set('Asia/Bangkok');
        $sql="SELECT *  FROM member WHERE id = $id" ;
        $datarequest=DB::select($sql)[0];
        $dateNow = Date('Y-m-d');
        if(($datarequest->exp_date) <= $dateNow){
            $member = member::find($id);
            $member->package  = 0; 
            $member->free_trial = 1;
            $member->exp_date =null;
            $member->save();
            $exp=true;
        }
     
        
          return response()->json(array(
            'message' => 'Update successfully', 
            'status' => $exp));
    }
   
    public function updatedaymember($id,$f)//f 0 = 1ปี  f 1 = 1เดือน
    {

        date_default_timezone_set('Asia/Bangkok');

            if($f == 0){

            $member = member::find($id);
            $member->package  = 1; 
            $member->free_trial = 1;
            $member->exp_date =Date('Y-m-d',strtotime('+1 year'));
            $member->save();

        }
       if($f ==1){
            $member = member::find($id);
            $member->package  = 1; 
            $member->free_trial = 1;
            $member->exp_date =Date('Y-m-d',strtotime('+1 month'));
            $member->save();
        }
        
          return response()->json(array(
             'message' => 'Updatedat successfully', 
             'status' => 'true'));
    }
   
}

