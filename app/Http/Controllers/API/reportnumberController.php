<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reportnumber;

class ReportnumberController extends Controller
{
    public function index()
    {
        $reportnumber = reportnumber::all(); 
        return response()->json($reportnumber);
    }

    public function AddReport(Request $request)
    {
     
            //add AddReport
            $reportnumber = new reportnumber();
            $reportnumber->address = $request->get("address"); 
            $reportnumber->detail = $request->get("detail");  
            $reportnumber->status  = 0;
            $reportnumber->save();
           
          //soft delete
          return response()->json(array(
            'message' => 'AddReport successfully', 
            'status' => 'true'));
    }

    public function AddNumber(Request $request)
    {
     
            //add AddReport
            $reportnumber = new reportnumber();
            $reportnumber->address = $request->get("address"); 
            $reportnumber->detail = $request->get("detail");  
            $reportnumber->status  = 1;
            $reportnumber->save();
           
          //soft delete
          return response()->json(array(
            'message' => 'AddNumber successfully', 
            'status' => 'true'));
    }

}

