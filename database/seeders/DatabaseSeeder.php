<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'title'=> 'Uyelik Murcaati 65-71 Yas',
                'min_age' => '65',
                'max_age' => '71',
                'price'=> '170'
            ],
            [
                'title'=> 'Uyelik Murcaati 60-65 Yas',
                'min_age' => '60',
                'max_age' => '65',
                'price'=> '85'
            ],
            [
                'title'=> 'Uyelik Murcaati 55-59 Yas - Aile',
                'min_age' => '55',
                'max_age' => '59',
                'price'=> '60'
            ],
            [
                'title'=> 'Uyelik Murcaati 54 Yas Vealti - Aile',
                'min_age' => '54',
                'max_age' => '59',
                'price'=> '60'
            ],
            [
                'title'=> 'Uyelik Murcaati 26 -59 Yas ',
                'min_age' => '26',
                'max_age' => '54',
                'price'=> '45'
            ],
            [
                'title'=> 'Uyelik Murcaati 18-25 Yas ',
                'min_age' => '18',
                'max_age' => '25',
                'price'=> '35'
            ],
            [
                'title'=> 'Uyelik Murcaati 0-18 Ya ',
                'min_age' => '0',
                'max_age' => '18',
                'price'=> '35'
            ]
        ];
       // DB::table('plans')->insert($data);
    }
}
