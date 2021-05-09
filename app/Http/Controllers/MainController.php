<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Fact;

class MainController extends Controller
{

    public function add(){
        return view('add');
    }

    public function data(Request $rec){
        $obj = new Fact();
        $obj -> fact = $rec->input('fact');
        $obj -> used = 0;
        $obj -> save();
        return redirect()->route('add');
    }
}
