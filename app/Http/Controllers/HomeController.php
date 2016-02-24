<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Jadwal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $day = strtolower(date('l'));
        $hari = Jadwal::changeDay($day);

        if(isset($request->hari))
        {
            $hari = $request->hari;
        }
        $jadwal = Jadwal::where('hari', '=', $hari)->get();

        return view('home')->with(['jadwal'=>$jadwal,'hari'=>$hari]);
    }

    public function tambahJadwal()
    {
        return view('tambah-jadwal');
    }

    public function prosesTambahJadwal(Request $request)
    {
        $data = $request->all();
        Jadwal::create($data);
        return back();
    }

    public function editJadwal($id)
    {
       $jadwal = Jadwal::where('id', '=', $id)->first();
       return view('edit-jadwal')->with('jadwal', $jadwal);
    }

    public function updateJadwal(Request $request)
    {
         $data = $request->all();
         unset($data['_token']);
         $id = $request->id;

         Jadwal::where('id', '=', $id)->update($data);
         return redirect('/dashboard');
    }

    public function hapusJadwal($id)
    {
        Jadwal::where('id', '=', $id)->delete();
        return redirect('/dashboard');
    }
}
