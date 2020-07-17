<?php

namespace App\Http\Controllers;

use App\Models\CsvData;
use Illuminate\Http\Request;

class CsvDataController extends Controller
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
