<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Fact;
use Illuminate\Support\Facades\DB;

class FactController extends Controller
{
    public function main()
    {
        if (Cache::get('id', -1) == -1) {
            Cache::add('id', $this->getNum(), now()->addHours(24));
        }
        if(Cache::get('id') == 0){
            return view('main', ['fact' => 'Sorry, we are looking for new interesting facts. Try checking tomorrow']);
        }
        return view('main', ['fact' => Fact::find(Cache::get('id'))->fact]);
    }

    protected function getNum(){
        $val = rand(1, Fact::all()->count('id'));
        if(Fact::all()-> where('id', '=', $val)->where('used', '=', 0)){
            DB::update('update facts set used = 1 where id = '.$val);
            return $val;
        } else {
            if(!Fact::all()->where('used', '=', 0)){
                return 0;
            }
            $this->getNum();
        }
    }
}
