<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all(); 
        return response()->json($message);
    }

}

