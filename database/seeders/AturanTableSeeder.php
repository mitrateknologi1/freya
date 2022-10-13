<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AturanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aturan')->delete();
        
        \DB::table('aturan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_penyakit' => 1,
                'id_gejala' => 1,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 11:55:09',
                'updated_at' => '2022-10-12 11:55:09',
            ),
            1 => 
            array (
                'id' => 2,
                'id_penyakit' => 1,
                'id_gejala' => 2,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 11:56:27',
                'updated_at' => '2022-10-12 11:56:27',
            ),
            2 => 
            array (
                'id' => 3,
                'id_penyakit' => 1,
                'id_gejala' => 3,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 11:56:46',
                'updated_at' => '2022-10-12 11:56:46',
            ),
            3 => 
            array (
                'id' => 4,
                'id_penyakit' => 1,
                'id_gejala' => 4,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 11:56:59',
                'updated_at' => '2022-10-12 11:56:59',
            ),
            4 => 
            array (
                'id' => 5,
                'id_penyakit' => 2,
                'id_gejala' => 2,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:57:14',
                'updated_at' => '2022-10-12 11:57:14',
            ),
            5 => 
            array (
                'id' => 6,
                'id_penyakit' => 2,
                'id_gejala' => 5,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:57:27',
                'updated_at' => '2022-10-12 11:57:27',
            ),
            6 => 
            array (
                'id' => 7,
                'id_penyakit' => 2,
                'id_gejala' => 6,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:57:38',
                'updated_at' => '2022-10-12 11:57:38',
            ),
            7 => 
            array (
                'id' => 8,
                'id_penyakit' => 3,
                'id_gejala' => 7,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:57:58',
                'updated_at' => '2022-10-12 11:57:58',
            ),
            8 => 
            array (
                'id' => 9,
                'id_penyakit' => 3,
                'id_gejala' => 8,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:58:15',
                'updated_at' => '2022-10-12 11:58:15',
            ),
            9 => 
            array (
                'id' => 10,
                'id_penyakit' => 3,
                'id_gejala' => 9,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:58:33',
                'updated_at' => '2022-10-12 11:58:33',
            ),
            10 => 
            array (
                'id' => 11,
                'id_penyakit' => 4,
                'id_gejala' => 10,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 11:58:47',
                'updated_at' => '2022-10-12 11:58:47',
            ),
            11 => 
            array (
                'id' => 12,
                'id_penyakit' => 5,
                'id_gejala' => 11,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 11:59:08',
                'updated_at' => '2022-10-12 11:59:08',
            ),
            12 => 
            array (
                'id' => 13,
                'id_penyakit' => 5,
                'id_gejala' => 12,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 11:59:51',
                'updated_at' => '2022-10-12 11:59:51',
            ),
            13 => 
            array (
                'id' => 14,
                'id_penyakit' => 5,
                'id_gejala' => 13,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 12:00:04',
                'updated_at' => '2022-10-12 12:00:04',
            ),
            14 => 
            array (
                'id' => 15,
                'id_penyakit' => 5,
                'id_gejala' => 14,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 12:00:23',
                'updated_at' => '2022-10-12 12:00:23',
            ),
            15 => 
            array (
                'id' => 16,
                'id_penyakit' => 6,
                'id_gejala' => 13,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:00:39',
                'updated_at' => '2022-10-12 12:00:39',
            ),
            16 => 
            array (
                'id' => 17,
                'id_penyakit' => 6,
                'id_gejala' => 15,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:00:56',
                'updated_at' => '2022-10-12 12:00:56',
            ),
            17 => 
            array (
                'id' => 18,
                'id_penyakit' => 6,
                'id_gejala' => 16,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:01:16',
                'updated_at' => '2022-10-12 12:01:16',
            ),
            18 => 
            array (
                'id' => 19,
                'id_penyakit' => 6,
                'id_gejala' => 17,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:01:37',
                'updated_at' => '2022-10-12 12:01:37',
            ),
            19 => 
            array (
                'id' => 20,
                'id_penyakit' => 6,
                'id_gejala' => 18,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:01:52',
                'updated_at' => '2022-10-12 12:01:52',
            ),
            20 => 
            array (
                'id' => 21,
                'id_penyakit' => 7,
                'id_gejala' => 1,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:02:17',
                'updated_at' => '2022-10-12 12:02:17',
            ),
            21 => 
            array (
                'id' => 22,
                'id_penyakit' => 7,
                'id_gejala' => 19,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:02:35',
                'updated_at' => '2022-10-12 12:02:35',
            ),
            22 => 
            array (
                'id' => 23,
                'id_penyakit' => 7,
                'id_gejala' => 20,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:02:57',
                'updated_at' => '2022-10-12 12:02:57',
            ),
            23 => 
            array (
                'id' => 24,
                'id_penyakit' => 7,
                'id_gejala' => 21,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:03:15',
                'updated_at' => '2022-10-12 12:03:15',
            ),
            24 => 
            array (
                'id' => 25,
                'id_penyakit' => 7,
                'id_gejala' => 22,
                'bobot_aturan' => 0.2,
                'created_at' => '2022-10-12 12:03:32',
                'updated_at' => '2022-10-12 12:03:32',
            ),
            25 => 
            array (
                'id' => 26,
                'id_penyakit' => 8,
                'id_gejala' => 23,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 12:03:45',
                'updated_at' => '2022-10-12 12:03:45',
            ),
            26 => 
            array (
                'id' => 27,
                'id_penyakit' => 8,
                'id_gejala' => 24,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 12:03:56',
                'updated_at' => '2022-10-12 12:03:56',
            ),
            27 => 
            array (
                'id' => 28,
                'id_penyakit' => 8,
                'id_gejala' => 25,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 12:04:24',
                'updated_at' => '2022-10-12 12:04:24',
            ),
            28 => 
            array (
                'id' => 29,
                'id_penyakit' => 8,
                'id_gejala' => 26,
                'bobot_aturan' => 0.25,
                'created_at' => '2022-10-12 12:04:41',
                'updated_at' => '2022-10-12 12:04:41',
            ),
        ));
        
        
    }
}