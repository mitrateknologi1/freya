<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('/uploads');
        Storage::makeDirectory('/uploads');

        // File::copyDirectory(
        //     public_path('file_dummy'),
        //     storage_path('app/public/uploads')
        // );

        // $this->call(GejalaTableSeeder::class);
        // $this->call(PenyakitTableSeeder::class);
        // $this->call(AturanTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}
