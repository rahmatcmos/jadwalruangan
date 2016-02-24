<?php

use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
        	'matakuliah' => 'Kalkulus Lanjut',
        	'dosen' => 'Drs. Cucu Suhery, M.A',
            'hari' => 'senin',
        	'mulai' => '13:00',
        	'selesai' => '15:30',
        	'ruangan' => 'siskom 2'
        ]);
    }
}
