<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\phone;

class phoneController extends Controller
{
    public function index()
    {
        $phone = phone::all(); 
        return response()->json($phone);
    }

}