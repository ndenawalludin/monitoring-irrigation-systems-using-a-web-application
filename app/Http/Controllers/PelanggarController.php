<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Pelanggar;

class PelanggarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $pelanggars = \DB::table('pelanggars')->paginate(1);
 
    		// mengirim data pegawai ke view index
		// return view('pelanggar.index',['pelanggars' => $pelanggars]);
        
        $pelanggars = \DB::table('pelanggars')->latest()->first();
        return view('pelanggar.index',['pelanggars' => $pelanggars]);
    }

    public function indexMonitoring()
    {
        //
        $pelanggars = \DB::table('pelanggars')->paginate(10);
 
    		// mengirim data pegawai ke view index
		return view('monitoring.monitoring',['pelanggars' => $pelanggars]);
    }

    // public function search(Request $request)
    // {
    //     $search = $request->search;
 
    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$pelanggars = \DB::table('pelanggars')
    //     ->where('nik','like',"%".$search."%")->paginate();

	// 	$pelanggars = \DB::table('pelanggars')
    //     ->where('platnomor','like',"%".$search."%")->paginate();
 
    // 		// mengirim data pegawai ke view index
    //     return view('pelanggar.index',['pelanggars' => $pelanggars]);
        
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
