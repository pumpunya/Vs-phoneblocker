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

    public function update(Request $request, $id)
    {
    $member =member($id);
    $member->email = $request->get("email"); 
    $member->username = $request->get("username"); 
    $member->password = $request->get("password");  
    $member->package  = 1;
    $free_trial= date_create('now', timezone_open('Asia/Bangkok'))->format('Y-m-d H:i:s');
    echo $free_trial;


    $chang = DB::select($spl)[0];
    if($chang ->exp_date =$free_trial){
        return response()->json(array());
    }
    else
    $chang = $chang ->exp_date1 +30;
    $member->save();
 
   
    
  return response()->json(array(
    'message' => 'Update a member successfully', 
    'status' => 'true'));
    }

   /* public function __construct()
    {
        $member->free_trial = new DateTime('now');
    }
*/

}

