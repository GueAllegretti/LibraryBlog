<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        //return view('homepage');
        //return Library::all();
        $data = Library::all();
        return view('homepage', ['libraries'=>$data]);
    }
}
