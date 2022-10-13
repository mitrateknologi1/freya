<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GejalaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gejala')->delete();
        
        \DB::table('gejala')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode' => 'G001',
                'nama_gejala' => 'Gejala awal pada daun yang terserang berupa bintik-bintik putih',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:49:18',
                'updated_at' => '2022-10-12 11:49:18',
            ),
            1 => 
            array (
                'id' => 2,
                'kode' => 'G002',
                'nama_gejala' => 'Pada serangan berat, hampir seluruh helaian daun dipenuhi oleh korokan sehingga daun menjadi kering dan berwana putih kecoklatan seperti terbakar',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:49:36',
                'updated_at' => '2022-10-12 11:49:36',
            ),
            2 => 
            array (
                'id' => 3,
                'kode' => 'G003',
                'nama_gejala' => 'Pada daun bawang merah terlihat goresan-goresan yang berwarna putih memanjang dari atas ke bawah',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:49:47',
                'updated_at' => '2022-10-12 11:49:47',
            ),
            3 => 
            array (
                'id' => 4,
                'kode' => 'G004',
                'nama_gejala' => 'Pada tingkat serangan yang berat dapat menyebabkan sebagian besar daun menjadi terkulai, layu dan akhirnya daun tersebut berwarna putih kekuning-kuningan',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:49:57',
                'updated_at' => '2022-10-12 11:49:57',
            ),
            4 => 
            array (
                'id' => 5,
                'kode' => 'G005',
                'nama_gejala' => 'Daun bawah tampak berlubang da nada kalanya sampai patah',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:50:07',
                'updated_at' => '2022-10-12 11:50:07',
            ),
            5 => 
            array (
                'id' => 6,
                'kode' => 'G006',
                'nama_gejala' => 'Pada daun bawang merah terlihat gurat putih memanjang seperti membrane, kemudian layu, berlubang, dan didekat lubang tersebut terdapat kotoran ulat',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:50:17',
                'updated_at' => '2022-10-12 11:50:17',
            ),
            6 => 
            array (
                'id' => 7,
                'kode' => 'G007',
                'nama_gejala' => 'Pangkal batang yang digigit akan mudah patah sehingga tanaman menjadi rebah dan mati',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:50:29',
                'updated_at' => '2022-10-12 11:50:29',
            ),
            7 => 
            array (
                'id' => 8,
                'kode' => 'G008',
                'nama_gejala' => 'Pangkal batang terpotong-potong, batang rebah, batang rusak dan berceceran',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:50:39',
                'updated_at' => '2022-10-12 11:50:39',
            ),
            8 => 
            array (
                'id' => 9,
                'kode' => 'G009',
                'nama_gejala' => 'Permukaan daun tampak berwarna putih keperak-perakan',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:50:48',
                'updated_at' => '2022-10-12 11:50:48',
            ),
            9 => 
            array (
                'id' => 10,
                'kode' => 'G010',
                'nama_gejala' => 'Pada saat serangan hebat, seluruh areal daun pertanaman berwarna putih dan akhirnya tanaman mati',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:51:01',
                'updated_at' => '2022-10-12 11:51:01',
            ),
            10 => 
            array (
                'id' => 11,
                'kode' => 'G011',
            'nama_gejala' => 'Gejala awal infeksi akan timbul bercak berukuran kecil, melekuk ke dalam, berwarna putih dengan pusat berwarna ungu (kelabu)',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:51:11',
                'updated_at' => '2022-10-12 11:51:11',
            ),
            11 => 
            array (
                'id' => 12,
                'kode' => 'G012',
                'nama_gejala' => 'Ujung daun mengering sehingga daun patah',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:51:22',
                'updated_at' => '2022-10-12 11:51:22',
            ),
            12 => 
            array (
                'id' => 13,
                'kode' => 'G013',
                'nama_gejala' => 'Permukaan bercak selanjutnya akan berwarna coklat kehitaman',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:51:32',
                'updated_at' => '2022-10-12 11:51:32',
            ),
            13 => 
            array (
                'id' => 14,
                'kode' => 'G014',
                'nama_gejala' => 'Umbi berwarna kuning lalu merah kecoklatan dan akhirnya membusuk',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:51:41',
                'updated_at' => '2022-10-12 11:51:41',
            ),
            14 => 
            array (
                'id' => 15,
                'kode' => 'G015',
                'nama_gejala' => 'Bercak berwarna putih pada daun',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:51:52',
                'updated_at' => '2022-10-12 11:51:52',
            ),
            15 => 
            array (
                'id' => 16,
                'kode' => 'G016',
                'nama_gejala' => 'Daun berbentuk lekukan ke dalam, berlubang dan patah karena terkulai tepat pada bercak',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:52:01',
                'updated_at' => '2022-10-12 11:52:01',
            ),
            16 => 
            array (
                'id' => 17,
                'kode' => 'G017',
                'nama_gejala' => 'Jika infeksi berlanjut, daun berbentuk koloni konidia yang berwarna merah muda, yang kemudian berubah menjadi coklat muda, coklat tua dan akhirnya kehitam-hitaman',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:52:11',
                'updated_at' => '2022-10-12 11:52:11',
            ),
            17 => 
            array (
                'id' => 18,
                'kode' => 'G018',
                'nama_gejala' => 'Umbi kemudian membusuk, daun mengering',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:52:21',
                'updated_at' => '2022-10-12 11:52:21',
            ),
            18 => 
            array (
                'id' => 19,
                'kode' => 'G019',
                'nama_gejala' => 'Botak-botak di beberapa tempat',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:52:34',
                'updated_at' => '2022-10-12 11:52:34',
            ),
            19 => 
            array (
                'id' => 20,
                'kode' => 'G020',
                'nama_gejala' => 'Daun menjadi hijau pucat atau kekuningan pada bagian ujung daun dimulai dari tanaman tua',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:52:42',
                'updated_at' => '2022-10-12 11:52:42',
            ),
            20 => 
            array (
                'id' => 21,
                'kode' => 'G021',
                'nama_gejala' => 'Menguning pada daun pucuk daun kearah pangkal daun',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:52:51',
                'updated_at' => '2022-10-12 11:52:51',
            ),
            21 => 
            array (
                'id' => 22,
                'kode' => 'G022',
            'nama_gejala' => 'Daun tidak tumbuh tegak tetapi meliuk (moler) karena daun tumbuh lebih panjang, serta warna daun hijau pucat atau kekuningan',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:53:00',
                'updated_at' => '2022-10-12 11:53:00',
            ),
            22 => 
            array (
                'id' => 23,
                'kode' => 'G023',
                'nama_gejala' => 'Akar tanaman berwarna coklat pucat dan berukuran lebih pendek dibandingkan akar tanaman sehat',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:53:14',
                'updated_at' => '2022-10-12 11:53:14',
            ),
            23 => 
            array (
                'id' => 24,
                'kode' => 'G024',
                'nama_gejala' => 'Tanaman akan mengalami nekrosis dan umbi membusuk',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:53:22',
                'updated_at' => '2022-10-12 11:53:22',
            ),
            24 => 
            array (
                'id' => 25,
                'kode' => 'G025',
                'nama_gejala' => 'Tidak dapat menghasilkan umbi atau bahkan akar kering dan mati',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:53:33',
                'updated_at' => '2022-10-12 11:53:33',
            ),
            25 => 
            array (
                'id' => 26,
                'kode' => 'G026',
                'nama_gejala' => 'Pada tingkat serangan penyakit yang ringan, umbi yang dihasilkan akan berukuran lebih kecil dan lebih sedikit',
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 11:53:42',
                'updated_at' => '2022-10-12 11:53:42',
            ),
        ));
        
        
    }
}