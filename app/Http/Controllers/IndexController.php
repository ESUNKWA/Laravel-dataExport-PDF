<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;

class IndexController extends Controller
{
    // Tableau contenant la lite des utilisateurs
    public $utilisateurs = [
        "r_nom"=>"Déki",
        "r_prenoms"=>"Moïse",
        "r_contact"=>"07.59.94.71.36"
    ];

    public function index() {
        
        return view('app', ["datas"=>$this->utilisateurs]);
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $datas = $this->utilisateurs;
 
        // share data to view
        view()->share('data',$datas);
         $pdf = PDF::loadView('pdf_view', $datas);
        
        // download PDF file with download method
       return $pdf->download('pdf_file.pdf');
      }
}
