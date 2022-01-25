<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\member;

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
            //$member->exp_date = 0;
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
}

