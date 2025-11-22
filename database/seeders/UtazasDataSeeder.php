<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtazasDataSeeder extends Seeder
{
    public function run()
    {

        // 1. Helység adatok
        DB::table('helyseg')->insert([
            ['az' => 1, 'nev' => 'Sousse', 'orszag' => 'Tunézia', 'created_at' => now(), 'updated_at' => now()],
            ['az' => 2, 'nev' => 'Djerba', 'orszag' => 'Tunézia', 'created_at' => now(), 'updated_at' => now()],
            ['az' => 3, 'nev' => 'Sharm El Sheikh', 'orszag' => 'Egyiptom', 'created_at' => now(), 'updated_at' => now()],
            ['az' => 4, 'nev' => 'Hurghada', 'orszag' => 'Egyiptom', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 2. Szálloda adatok - TELJES LISTA
        DB::table('szalloda')->insert([
            ['az' => 'BS', 'nev' => 'Baron Resort', 'besorolas' => 5, 'helyseg_az' => 3, 'tengerpart_tav' => 0, 'repter_tav' => 15, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'CL', 'nev' => 'Charm Life', 'besorolas' => 3, 'helyseg_az' => 4, 'tengerpart_tav' => 0, 'repter_tav' => 33, 'felpanzio' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'CP', 'nev' => 'Cesar Palace', 'besorolas' => 5, 'helyseg_az' => 2, 'tengerpart_tav' => 250, 'repter_tav' => 27, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'CW', 'nev' => 'Caribbean World Soma Bay', 'besorolas' => 5, 'helyseg_az' => 4, 'tengerpart_tav' => 0, 'repter_tav' => 55, 'felpanzio' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'CZ', 'nev' => 'Crowne Plaza', 'besorolas' => 4, 'helyseg_az' => 3, 'tengerpart_tav' => 400, 'repter_tav' => 9, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'FJ', 'nev' => 'Festival Le Jardin Resort', 'besorolas' => 4, 'helyseg_az' => 4, 'tengerpart_tav' => 0, 'repter_tav' => 17, 'felpanzio' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'HB', 'nev' => 'Lti Holiday Beach Resort', 'besorolas' => 4, 'helyseg_az' => 2, 'tengerpart_tav' => 100, 'repter_tav' => 20, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'JR', 'nev' => 'Jinene Resort', 'besorolas' => 4, 'helyseg_az' => 1, 'tengerpart_tav' => 50, 'repter_tav' => 25, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'MB', 'nev' => 'Marhaba', 'besorolas' => 3, 'helyseg_az' => 1, 'tengerpart_tav' => 0, 'repter_tav' => 25, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'MD', 'nev' => 'Miramar Djerba', 'besorolas' => 3, 'helyseg_az' => 2, 'tengerpart_tav' => 300, 'repter_tav' => 22, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'MP', 'nev' => 'El Mouradi Palace', 'besorolas' => 5, 'helyseg_az' => 1, 'tengerpart_tav' => 0, 'repter_tav' => 35, 'felpanzio' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['az' => 'TA', 'nev' => 'Tropicana Azur', 'besorolas' => 4, 'helyseg_az' => 3, 'tengerpart_tav' => 400, 'repter_tav' => 9, 'felpanzio' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 3. Tavasz adatok - CSAK ELSŐ 10 SOR (hogy ne legyen túl nagy)
        DB::table('tavasz')->insert([
            ['szalloda_az' => 'BS', 'indulas' => '2011-01-05', 'idotartam' => 8, 'ar' => 244900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'BS', 'indulas' => '2011-01-05', 'idotartam' => 15, 'ar' => 358900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'BS', 'indulas' => '2011-01-12', 'idotartam' => 8, 'ar' => 157900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'BS', 'indulas' => '2011-01-12', 'idotartam' => 15, 'ar' => 265900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'BS', 'indulas' => '2011-01-19', 'idotartam' => 8, 'ar' => 157900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'BS', 'indulas' => '2011-01-19', 'idotartam' => 15, 'ar' => 265900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'CL', 'indulas' => '2011-01-02', 'idotartam' => 8, 'ar' => 59900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'CL', 'indulas' => '2011-01-02', 'idotartam' => 15, 'ar' => 99900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'CL', 'indulas' => '2011-01-09', 'idotartam' => 8, 'ar' => 83900, 'created_at' => now(), 'updated_at' => now()],
            ['szalloda_az' => 'CL', 'indulas' => '2011-01-09', 'idotartam' => 15, 'ar' => 124900, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}