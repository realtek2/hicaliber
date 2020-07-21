<?php

namespace App\Http\Controllers;

use App\CsvData;
use App\Http\Filters\CsvDataFilter;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }
    
    public function name(Request $request)
    {
        $data = CsvData::where('name', $request->keywords)->get();

        return response()->json($data);
    }

}
