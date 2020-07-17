<?php

namespace App\Http\Controllers;

use App\Models\ImportCsv;
use Illuminate\Http\Request;

class ImportCsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('import');
    }

   public function import_data()
   {
       
   }
}
