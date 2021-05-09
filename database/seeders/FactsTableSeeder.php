<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[] = null;
        $count = 0;
        $filejson = Storage::disk('public')->get('facts.json'); //getting data from .json
        $filejson = json_decode($filejson);
        foreach ($filejson as $temp) {
            $data[$count] = [
                'used' => False,
                'fact' => $temp->fact
            ];
            $count++;
        }
        $filetxt = Storage::disk('public')->get('facts.txt');   //getting data from .txt
        $filetxt = explode("\n", $filetxt);
        foreach ($filetxt as $temp) {
            $data[$count] = [
                'used' => False,
                'fact' => $temp
            ];
            $count++;
        }
        $filephp = include('./storage/public/facts.php');  //getting data from .php
        foreach ($filephp as $temp) {
            $data[$count] = [
                'used' => False,
                'fact' => $temp
            ];
            $count++;
        }
        DB::table('facts') -> insert($data);
    }
}
