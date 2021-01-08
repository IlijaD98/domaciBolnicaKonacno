<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors')->insert([
            [
                'name'=>'Marko',
            'surname'=>'Markovic',
            'email'=>'markomarkovic@gmail.com',
            'category'=>'hirurgija',
            'galerry'=>'http://tirsova.rs/wp-content/uploads/2014/08/Dusan-Abramovic-300x300.jpg'
            ],
            [
                'name'=>'Jovana',
            'surname'=>'Jovanovic',
            'email'=>'jovanajovanovic@gmail.com',
            'category'=>'pedijatrija',
            'galerry'=>'http://tirsova.rs/wp-content/uploads/2014/08/Marina-Atanaskovic-Markovic_MG_5853-300x300.jpg'   
            ],
            [
                'name'=>'Petra',
            'surname'=>'Petrovic',
            'email'=>'petrapetrovic@gmail.com',
            'category'=>'psihologija',
            'galerry'=>'http://tirsova.rs/wp-content/uploads/2014/07/Dragana-Bogicevic_MG_5572-300x300.jpg' 
            
            ],
            [
                'name'=>'Nikola',
                'surname'=>'Nikolic',
                'email'=>'nikolanikolic@gmail.com',
                'category'=>'hirurgija',
                'galerry'=>'http://tirsova.rs/wp-content/uploads/2014/08/Bojan-Bukva6-300x300.jpg' 
            ]
        ]);

    }
}
