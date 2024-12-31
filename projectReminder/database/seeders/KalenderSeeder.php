<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kalender; 

class KalenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = [[1,3], 5, 6, 9, [12, 13]];
        $fake = fake('id');
        $today = date('Y-m-d');

        foreach ($days as $day){
            if(is_array($day)){
                $kalenders[]=[
                    'title' => $fake->sentence(3),
                    'start_date' => date('Y-m-d', strtotime($today.'+'.$day[0].' days')),
                    'end_date' => date('Y-m-d', strtotime($today.'+'.$day[1].' days')),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            } else{
                $kalenders[]=[
                    'title' => $fake->sentence(3),
                    'start_date' => date('Y-m-d', strtotime($today.'+'.$day.' days')),
                    'end_date' => date('Y-m-d', strtotime($today.'+'.$day.' days')),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        Kalender::insert($kalenders);
    }
}
