<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function list(Request $request)
    {
        return [
            'results' => country::select(['id', 'name as text'])
            ->where('name', 'like', '%' .$request->input('term').'%')
            ->take(20)
            ->get()
        ];
    }
}
