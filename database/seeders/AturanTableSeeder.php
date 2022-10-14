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
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 11:55:09',
                'updated_at' => '2022-10-13 14:57:41',
            ),
            1 => 
            array (
                'id' => 2,
                'id_penyakit' => 1,
                'id_gejala' => 2,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 11:56:27',
                'updated_at' => '2022-10-14 09:50:55',
            ),
            2 => 
            array (
                'id' => 3,
                'id_penyakit' => 1,
                'id_gejala' => 3,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-12 11:56:46',
                'updated_at' => '2022-10-14 09:51:23',
            ),
            3 => 
            array (
                'id' => 4,
                'id_penyakit' => 1,
                'id_gejala' => 4,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-12 11:56:59',
                'updated_at' => '2022-10-14 09:51:14',
            ),
            4 => 
            array (
                'id' => 5,
                'id_penyakit' => 2,
                'id_gejala' => 2,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 11:57:14',
                'updated_at' => '2022-10-14 09:40:27',
            ),
            5 => 
            array (
                'id' => 6,
                'id_penyakit' => 2,
                'id_gejala' => 5,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 11:57:27',
                'updated_at' => '2022-10-14 09:40:40',
            ),
            6 => 
            array (
                'id' => 7,
                'id_penyakit' => 2,
                'id_gejala' => 6,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 11:57:38',
                'updated_at' => '2022-10-14 09:40:52',
            ),
            7 => 
            array (
                'id' => 8,
                'id_penyakit' => 3,
                'id_gejala' => 4,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-12 11:57:58',
                'updated_at' => '2022-10-14 04:42:44',
            ),
            8 => 
            array (
                'id' => 9,
                'id_penyakit' => 3,
                'id_gejala' => 3,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 11:58:15',
                'updated_at' => '2022-10-14 04:42:14',
            ),
            9 => 
            array (
                'id' => 10,
                'id_penyakit' => 3,
                'id_gejala' => 1,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-12 11:58:33',
                'updated_at' => '2022-10-14 04:41:51',
            ),
            10 => 
            array (
                'id' => 11,
                'id_penyakit' => 4,
                'id_gejala' => 3,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 11:58:47',
                'updated_at' => '2022-10-14 04:10:22',
            ),
            11 => 
            array (
                'id' => 12,
                'id_penyakit' => 5,
                'id_gejala' => 11,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 11:59:08',
                'updated_at' => '2022-10-14 04:01:10',
            ),
            12 => 
            array (
                'id' => 13,
                'id_penyakit' => 5,
                'id_gejala' => 16,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 11:59:51',
                'updated_at' => '2022-10-14 04:00:06',
            ),
            13 => 
            array (
                'id' => 14,
                'id_penyakit' => 5,
                'id_gejala' => 13,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 12:00:04',
                'updated_at' => '2022-10-14 04:00:51',
            ),
            14 => 
            array (
                'id' => 15,
                'id_penyakit' => 5,
                'id_gejala' => 14,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 12:00:23',
                'updated_at' => '2022-10-14 04:00:32',
            ),
            15 => 
            array (
                'id' => 16,
                'id_penyakit' => 6,
                'id_gejala' => 13,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:00:39',
                'updated_at' => '2022-10-14 03:45:00',
            ),
            16 => 
            array (
                'id' => 17,
                'id_penyakit' => 6,
                'id_gejala' => 20,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:00:56',
                'updated_at' => '2022-10-14 03:44:39',
            ),
            17 => 
            array (
                'id' => 18,
                'id_penyakit' => 6,
                'id_gejala' => 16,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:01:16',
                'updated_at' => '2022-10-14 03:45:22',
            ),
            18 => 
            array (
                'id' => 19,
                'id_penyakit' => 6,
                'id_gejala' => 17,
                'bobot_aturan' => 0.5,
                'created_at' => '2022-10-12 12:01:37',
                'updated_at' => '2022-10-14 03:45:43',
            ),
            19 => 
            array (
                'id' => 20,
                'id_penyakit' => 6,
                'id_gejala' => 21,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:01:52',
                'updated_at' => '2022-10-14 03:46:58',
            ),
            20 => 
            array (
                'id' => 21,
                'id_penyakit' => 7,
                'id_gejala' => 1,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:02:17',
                'updated_at' => '2022-10-14 03:25:25',
            ),
            21 => 
            array (
                'id' => 22,
                'id_penyakit' => 7,
                'id_gejala' => 2,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:02:35',
                'updated_at' => '2022-10-14 03:31:06',
            ),
            22 => 
            array (
                'id' => 23,
                'id_penyakit' => 7,
                'id_gejala' => 20,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:02:57',
                'updated_at' => '2022-10-14 03:30:09',
            ),
            23 => 
            array (
                'id' => 24,
                'id_penyakit' => 7,
                'id_gejala' => 21,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:03:15',
                'updated_at' => '2022-10-14 03:30:21',
            ),
            24 => 
            array (
                'id' => 25,
                'id_penyakit' => 7,
                'id_gejala' => 22,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:03:32',
                'updated_at' => '2022-10-14 03:30:39',
            ),
            25 => 
            array (
                'id' => 26,
                'id_penyakit' => 8,
                'id_gejala' => 23,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:03:45',
                'updated_at' => '2022-10-14 03:22:35',
            ),
            26 => 
            array (
                'id' => 27,
                'id_penyakit' => 8,
                'id_gejala' => 24,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:03:56',
                'updated_at' => '2022-10-14 03:22:50',
            ),
            27 => 
            array (
                'id' => 28,
                'id_penyakit' => 8,
                'id_gejala' => 25,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:04:24',
                'updated_at' => '2022-10-14 03:23:03',
            ),
            28 => 
            array (
                'id' => 29,
                'id_penyakit' => 8,
                'id_gejala' => 26,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-12 12:04:41',
                'updated_at' => '2022-10-13 14:56:07',
            ),
            29 => 
            array (
                'id' => 30,
                'id_penyakit' => 8,
                'id_gejala' => 1,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:06:43',
                'updated_at' => '2022-10-14 03:06:43',
            ),
            30 => 
            array (
                'id' => 31,
                'id_penyakit' => 8,
                'id_gejala' => 2,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:07:02',
                'updated_at' => '2022-10-14 03:07:02',
            ),
            31 => 
            array (
                'id' => 32,
                'id_penyakit' => 8,
                'id_gejala' => 3,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:07:25',
                'updated_at' => '2022-10-14 03:07:25',
            ),
            32 => 
            array (
                'id' => 33,
                'id_penyakit' => 8,
                'id_gejala' => 4,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:09:42',
                'updated_at' => '2022-10-14 03:09:42',
            ),
            33 => 
            array (
                'id' => 34,
                'id_penyakit' => 8,
                'id_gejala' => 5,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:10:00',
                'updated_at' => '2022-10-14 03:10:00',
            ),
            34 => 
            array (
                'id' => 35,
                'id_penyakit' => 8,
                'id_gejala' => 7,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:10:25',
                'updated_at' => '2022-10-14 03:10:25',
            ),
            35 => 
            array (
                'id' => 36,
                'id_penyakit' => 8,
                'id_gejala' => 10,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:16:01',
                'updated_at' => '2022-10-14 03:16:01',
            ),
            36 => 
            array (
                'id' => 37,
                'id_penyakit' => 8,
                'id_gejala' => 13,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:16:29',
                'updated_at' => '2022-10-14 03:16:29',
            ),
            37 => 
            array (
                'id' => 38,
                'id_penyakit' => 8,
                'id_gejala' => 16,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:16:50',
                'updated_at' => '2022-10-14 03:16:50',
            ),
            38 => 
            array (
                'id' => 39,
                'id_penyakit' => 8,
                'id_gejala' => 17,
                'bobot_aturan' => 0.33,
                'created_at' => '2022-10-14 03:18:04',
                'updated_at' => '2022-10-14 03:18:04',
            ),
            39 => 
            array (
                'id' => 40,
                'id_penyakit' => 8,
                'id_gejala' => 20,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:20:54',
                'updated_at' => '2022-10-14 03:20:54',
            ),
            40 => 
            array (
                'id' => 41,
                'id_penyakit' => 8,
                'id_gejala' => 21,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:21:31',
                'updated_at' => '2022-10-14 03:21:31',
            ),
            41 => 
            array (
                'id' => 42,
                'id_penyakit' => 8,
                'id_gejala' => 22,
                'bobot_aturan' => 1.0,
                'created_at' => '2022-10-14 03:22:22',
                'updated_at' => '2022-10-14 03:22:22',
            ),
            42 => 
            array (
                'id' => 43,
                'id_penyakit' => 7,
                'id_gejala' => 3,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:32:36',
                'updated_at' => '2022-10-14 03:32:36',
            ),
            43 => 
            array (
                'id' => 44,
                'id_penyakit' => 7,
                'id_gejala' => 4,
                'bobot_aturan' => 0.67,
                'created_at' => '2022-10-14 03:37:36',
                'updated_at' => '2022-10-14 03:37:36',
            ),
            44 => 
            array (
                'id' => 45,
                'id_penyakit' => 7,
                'id_gejala' => 5,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'id_penyakit' => 7,
                'id_gejala' => 7,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'id_penyakit' => 7,
                'id_gejala' => 10,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'id_penyakit' => 7,
                'id_gejala' => 13,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'id_penyakit' => 7,
                'id_gejala' => 16,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'id_penyakit' => 7,
                'id_gejala' => 17,
                'bobot_aturan' => 0.33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'id_penyakit' => 6,
                'id_gejala' => 1,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'id_penyakit' => 6,
                'id_gejala' => 2,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'id_penyakit' => 6,
                'id_gejala' => 3,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'id_penyakit' => 6,
                'id_gejala' => 4,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'id_penyakit' => 6,
                'id_gejala' => 5,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'id_penyakit' => 6,
                'id_gejala' => 7,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'id_penyakit' => 6,
                'id_gejala' => 10,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'id_penyakit' => 6,
                'id_gejala' => 22,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'id_penyakit' => 6,
                'id_gejala' => 23,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'id_penyakit' => 6,
                'id_gejala' => 24,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'id_penyakit' => 6,
                'id_gejala' => 25,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'id_penyakit' => 6,
                'id_gejala' => 26,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'id_penyakit' => 5,
                'id_gejala' => 1,
                'bobot_aturan' => 0.75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'id_penyakit' => 5,
                'id_gejala' => 3,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'id_penyakit' => 5,
                'id_gejala' => 4,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'id_penyakit' => 5,
                'id_gejala' => 5,
                'bobot_aturan' => 0.25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'id_penyakit' => 5,
                'id_gejala' => 7,
                'bobot_aturan' => 0.75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'id_penyakit' => 5,
                'id_gejala' => 8,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'id_penyakit' => 5,
                'id_gejala' => 9,
                'bobot_aturan' => 0.75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'id_penyakit' => 5,
                'id_gejala' => 10,
                'bobot_aturan' => 0.75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'id_penyakit' => 5,
                'id_gejala' => 19,
                'bobot_aturan' => 0.75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'id_penyakit' => 5,
                'id_gejala' => 20,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'id_penyakit' => 5,
                'id_gejala' => 21,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'id_penyakit' => 5,
                'id_gejala' => 22,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'id_penyakit' => 5,
                'id_gejala' => 23,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'id_penyakit' => 5,
                'id_gejala' => 24,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'id_penyakit' => 5,
                'id_gejala' => 26,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'id_penyakit' => 4,
                'id_gejala' => 4,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'id_penyakit' => 4,
                'id_gejala' => 5,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'id_penyakit' => 4,
                'id_gejala' => 8,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'id_penyakit' => 4,
                'id_gejala' => 9,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'id_penyakit' => 4,
                'id_gejala' => 11,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'id_penyakit' => 4,
                'id_gejala' => 13,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'id_penyakit' => 4,
                'id_gejala' => 15,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'id_penyakit' => 4,
                'id_gejala' => 16,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'id_penyakit' => 4,
                'id_gejala' => 17,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'id_penyakit' => 4,
                'id_gejala' => 18,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'id_penyakit' => 4,
                'id_gejala' => 19,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'id_penyakit' => 4,
                'id_gejala' => 20,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'id_penyakit' => 4,
                'id_gejala' => 21,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'id_penyakit' => 4,
                'id_gejala' => 23,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'id_penyakit' => 4,
                'id_gejala' => 24,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'id_penyakit' => 4,
                'id_gejala' => 25,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'id_penyakit' => 4,
                'id_gejala' => 26,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'id_penyakit' => 3,
                'id_gejala' => 9,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'id_penyakit' => 3,
                'id_gejala' => 11,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'id_penyakit' => 3,
                'id_gejala' => 13,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'id_penyakit' => 3,
                'id_gejala' => 14,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'id_penyakit' => 3,
                'id_gejala' => 15,
                'bobot_aturan' => 0.33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'id_penyakit' => 3,
                'id_gejala' => 16,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'id_penyakit' => 3,
                'id_gejala' => 17,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'id_penyakit' => 3,
                'id_gejala' => 18,
                'bobot_aturan' => 0.33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'id_penyakit' => 3,
                'id_gejala' => 19,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'id_penyakit' => 3,
                'id_gejala' => 20,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'id_penyakit' => 3,
                'id_gejala' => 21,
                'bobot_aturan' => 0.33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'id_penyakit' => 3,
                'id_gejala' => 22,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'id_penyakit' => 3,
                'id_gejala' => 23,
                'bobot_aturan' => 0.65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'id_penyakit' => 3,
                'id_gejala' => 24,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'id_penyakit' => 3,
                'id_gejala' => 25,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'id_penyakit' => 3,
                'id_gejala' => 26,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'id_penyakit' => 2,
                'id_gejala' => 1,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'id_penyakit' => 2,
                'id_gejala' => 3,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'id_penyakit' => 2,
                'id_gejala' => 4,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'id_penyakit' => 2,
                'id_gejala' => 7,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'id_penyakit' => 2,
                'id_gejala' => 9,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'id_penyakit' => 2,
                'id_gejala' => 10,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'id_penyakit' => 2,
                'id_gejala' => 11,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'id_penyakit' => 2,
                'id_gejala' => 12,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'id_penyakit' => 2,
                'id_gejala' => 13,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'id_penyakit' => 2,
                'id_gejala' => 15,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'id_penyakit' => 2,
                'id_gejala' => 20,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'id_penyakit' => 2,
                'id_gejala' => 21,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'id_penyakit' => 2,
                'id_gejala' => 22,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'id_penyakit' => 2,
                'id_gejala' => 24,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'id_penyakit' => 2,
                'id_gejala' => 26,
                'bobot_aturan' => 0.5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'id_penyakit' => 1,
                'id_gejala' => 5,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'id_penyakit' => 1,
                'id_gejala' => 6,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'id_penyakit' => 1,
                'id_gejala' => 7,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'id_penyakit' => 1,
                'id_gejala' => 8,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'id_penyakit' => 1,
                'id_gejala' => 9,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'id_penyakit' => 1,
                'id_gejala' => 10,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'id_penyakit' => 1,
                'id_gejala' => 20,
                'bobot_aturan' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'id_penyakit' => 1,
                'id_gejala' => 22,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'id_penyakit' => 1,
                'id_gejala' => 24,
                'bobot_aturan' => 0.67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}