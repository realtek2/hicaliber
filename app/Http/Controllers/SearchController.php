<?php

namespace App\Http\Controllers;

use App\CsvData;
use App\Http\Filters\CsvDataFilter;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }
    
    public function search(CsvDataFilter $csvDataFilter)
    {
        $datas = CsvData::filter($csvDataFilter)->get();

        return response()->json($datas);
    }
}
