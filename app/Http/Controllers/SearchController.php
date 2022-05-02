<?php

namespace App\Http\Controllers;

use App\Models\Data;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    function index()
    {
        return view('search');
    }

    function search(Request $request)
    {
        $search = $request['search'];
        $data = Data::where('symbol', 'LIKE', "%$search")->get();
        if ($data->count() != 0) {
            $info=$data;
        } else {
            $info = 'No Data Found!';
        }
        return view('search',compact('info'));
        
    }
}
