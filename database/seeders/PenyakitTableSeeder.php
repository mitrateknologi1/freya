<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenyakitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyakit')->delete();
        
        \DB::table('penyakit')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode' => 'HP01',
                'nama_penyakit' => 'Lalat Penggerek Daun',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642373.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:46:33',
                'updated_at' => '2022-10-13 06:26:13',
            ),
            1 => 
            array (
                'id' => 2,
                'kode' => 'HP02',
                'nama_penyakit' => 'Ulat Bawang',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642391.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:46:51',
                'updated_at' => '2022-10-13 06:26:31',
            ),
            2 => 
            array (
                'id' => 3,
                'kode' => 'HP03',
                'nama_penyakit' => 'Spodoptera Litura',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642429.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:47:12',
                'updated_at' => '2022-10-13 06:27:09',
            ),
            3 => 
            array (
                'id' => 4,
                'kode' => 'HP04',
                'nama_penyakit' => 'Ulat tanah',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642475.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:47:27',
                'updated_at' => '2022-10-13 06:27:55',
            ),
            4 => 
            array (
                'id' => 5,
                'kode' => 'HP05',
                'nama_penyakit' => 'Hama Thrips',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642512.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:47:40',
                'updated_at' => '2022-10-13 06:28:32',
            ),
            5 => 
            array (
                'id' => 6,
                'kode' => 'HP06',
                'nama_penyakit' => 'Penyakit Trotol atau bercak ungu',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642570.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:47:50',
                'updated_at' => '2022-10-13 06:29:30',
            ),
            6 => 
            array (
                'id' => 7,
                'kode' => 'HP07',
            'nama_penyakit' => 'Penyakit Antraknose (Cendawan Colletotrichum gloeosporidioides)',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642651.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:48:03',
                'updated_at' => '2022-10-13 06:30:51',
            ),
            7 => 
            array (
                'id' => 8,
                'kode' => 'HP08',
            'nama_penyakit' => 'Penyakit moler atau layu fusarium (cendawan Fusarium oxysporum)',
                'bobot_penyakit' => 1.0,
                'solusi' => '-',
                'foto' => '1665642698.jpg',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:48:16',
                'updated_at' => '2022-10-13 06:31:38',
            ),
        ));
        
        
    }
}