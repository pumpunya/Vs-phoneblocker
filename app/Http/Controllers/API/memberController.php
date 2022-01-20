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

}

