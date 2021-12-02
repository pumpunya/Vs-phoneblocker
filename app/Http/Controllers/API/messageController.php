<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;

class messageController extends Controller
{
    public function index()
    {
        $message = message::all(); 
        return response()->json($message);
    }

}

