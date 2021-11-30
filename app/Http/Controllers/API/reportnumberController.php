<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reportnumber;

class ReportnumberController extends Controller
{
    public function index()
    {
        $reportnumber = Reportnumber::all(); 
        return response()->json($reportnumber);
    }

}

