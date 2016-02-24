<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'matakuliah', 'dosen', 'hari', 'ruangan', 'mulai', 'selesai'
    ];

    public static function changeDay($day)
    {
    	switch ($day) {
    		case 'monday':
    			$hari = 'senin';
    			break;
    		case 'tuesday':
    			$hari = 'selasa';
    			break;
    		case 'wednesday':
    			$hari = 'rabu';
    			break;
    		case 'thursday':
    			$hari = 'kamis';
    			break;
    		case 'friday':
    			$hari = 'jum\'at';
    			break;
    		case 'tuesday':
    			$hari = 'sabtu';
    			break;
    		case 'tuesday':
    			$hari = 'minggu';
    			break;
    	}
    	return $hari;
    }
}
