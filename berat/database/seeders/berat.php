<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BeratModel;

class berat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $data1 = [
            'tanggal' => "2018-08-18",
            'max' => 50,
            'min' => 48,
            'perbedaan' => 1,
        ];
        BeratModel::create($data1);
        
        $data2 = [
            'tanggal' => "2018-08-19",
            'max' => 51,
            'min' => 50,
            'perbedaan' => 1,
        ];
        BeratModel::create($data2);

        $data3 = [
            'tanggal' => "2018-08-20",
            'max' => 52,
            'min' => 50,
            'perbedaan' => 2,
        ];
        BeratModel::create($data3);

        $data4 = [
            'tanggal' => "2018-08-21",
            'max' => 49,
            'min' => 49,
            'perbedaan' => 0,
        ];

        BeratModel::create($data4);
        
        $data5 = [
            'tanggal' => "2018-08-22",
            'max' => 50,
            'min' => 49,
            'perbedaan' => 1,
        ];
        BeratModel::create($data5);
    }
}
