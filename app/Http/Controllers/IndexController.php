<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\t_employes;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    // Tableau contenant la lite des utilisateurs
    

    public function index() {
        $datas = DB::table('t_employes')->get();
       
        return view('app', ["datas"=>$datas]);
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $datas = DB::table('t_employes')->get();
 
        // share data to view
        view()->share('datas',$datas);
         $pdf = PDF::loadView('pdf_view', $datas);
        
        // download PDF file with download method
       return $pdf->download('pdf_file.pdf');
      }
}
