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


    public function AddMember(Request $request)
    {
     
            //add AddMember
            $member = new member();
            $member->username = $request->get("username"); 
            $member->password = $request->get("password");  
            $member->package  = 0;
            $member->save();
           
          //soft delete
          return response()->json(array(
            'message' => 'AddMember successfully', 
            'status' => 'true'));
    }
    public function Addusername(Request $request)
    {
     
            //add AddMember
            $member = new member();
            $member->username = $request->get("username"); 
            $member->password = $request->get("password");  
            $member->package  = 1;
            $member->save();
           
          //soft delete
          return response()->json(array(
            'message' => 'Addusername successfully', 
            'status' => 'true'));
    }
}

