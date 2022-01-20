<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function index()
    {
        $user = User::all(); 
        return response()->json($user);
    }

}

