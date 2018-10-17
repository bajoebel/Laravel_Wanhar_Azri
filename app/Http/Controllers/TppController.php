<?php

namespace App\Http\Controllers;

use App\tpp;
use Illuminate\Http\Request;
use DB;
class TppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$hpps = DB::table('hpp')->get();
        $hpps = DB::table('hpp')
            ->join('pegawai', 'pegawai.id', '=', 'hpp.id')
            ->get();
        return view('hpp.index', ['hpp' => $hpps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pegawai=DB::table('pegawai')->get();
        return view('hpp.create',['pegawai'=>$pegawai]);
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
        //
        $request->validate([
            'tpp_pegawai_id'=> 'required',
            'tpp_tahun'=> 'required',
            'tpp_bulan'=> 'required',
            'tpp_harikerja'=> 'required',
            'tpp_izin'=> 'required',
            'tpp_cuti'=> 'required',
            'tpp_tanpaalasan'=> 'required',
            'tpp_terlambat'=> 'required',
            'tpp_cepatpulang'=> 'required',
            'tpp_uwas'=> 'required',
            'tpp_upacara'=> 'required',
            'tpp_skp'=> 'required',
            'tpp_pelayanan'=> 'required',
            'tpp_integritas'=> 'required',
            'tpp_komitmen'=> 'required',
            'tpp_disiplin'=> 'required',
            'tpp_kerjasama'=> 'required',
            'tpp_kepemimpinan'=> 'required'
        ]);
        //Hadir = jmlharikerj-izin-cuti-tanpaalasan
        $harikerja=$request->input('tpp_harikerja');
        $tpp_izin=$request->input('tpp_izin');
        $tpp_cuti=$request->input('tpp_cuti');
        $tpp_tanpaalasan=$request->input('tpp_tanpaalasan');
        $hadir=$harikerja-$tpp_izin-$tpp_cuti-$tpp_tanpaalasan;
        $uwas=$request->input('tpp_upacara')+$request->input('tpp_wirid')+$request->input('tpp_apel')+$request->input('tpp_senam');
        /*
        input post
        $role = $request->input('role');
        Insert
        DB::table('users')->insert(
            ['email' => 'john@example.com', 'votes' => 0]
        );

        Insertbatch
        DB::table('users')->insert([
            ['email' => 'taylor@example.com', 'votes' => 0],
            ['email' => 'dayle@example.com', 'votes' => 0]
        ]);
        insertid
        $id = DB::table('users')->insertGetId(
            ['email' => 'john@example.com', 'votes' => 0]
        );
        */
  

        Tpp::create($request->all());
        return redirect()->route('tpp.index')
                        ->with('success','Pegawai created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function show(tpp $tpp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function edit(tpp $tpp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tpp $tpp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tpp  $tpp
     * @return \Illuminate\Http\Response
     */
    public function destroy(tpp $tpp)
    {
        //
    }
}
