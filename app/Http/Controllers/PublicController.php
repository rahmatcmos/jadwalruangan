<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {

    	return view('welcome');
    }

    public function getJadwal()
    {
    	$day = strtolower(date('l'));
    	$hari = Jadwal::changeDay($day);
        $time = date('H:i');

    	$ruangan = ['siskom-1', 'siskom-2', 'siskom-3', 'laboratorium-a', 'laboratorium-b', 'workshop'];

    	foreach( $ruangan as $key => $value)
    	{
    		$jadwal[$value] = Jadwal::where('hari', '=', $hari)
    					 ->where('ruangan', '=', $value)
                         ->where('mulai', '<=', $time)
                         ->where('selesai', '>=', $time)
                         ->first();
    	}
    	return $jadwal;
    }
}
