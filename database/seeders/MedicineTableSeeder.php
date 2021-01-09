<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('medicine')->insert([
            [
             'name'=>'Brufen',
            'detail'=>'Lek za glavobolju',
            'company'=>'Galenika',
            'quantity'=>'200'
            ],
            [
             'name'=>'Rapidol',
            'detail'=>'Lek protiv bolova',
            'company'=>'Hemofarm',
            'quantity'=>'250'
            ],
            [
                'name'=>'Linex',
                'detail'=>'Lek za bol u stomaku',
                'company'=>'Ivancic i sinovi',
                'quantity'=>'300'
            
            ],
            [
                'name'=>'Tensec +',
                'detail'=>'Lek za spustanje pritiska ',
                'company'=>'Galenika',
                'quantity'=>'100'
            ],
            [
                'name'=>'Dimigal',
                'detail'=>'Lek protiv mucnine u putu',
                'company'=>'Hemofarm',
                'quantity'=>'150'
            ]
        ]);
    }
}
