<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use DB;
class CariJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$pegawai = Pegawai::latest()->paginate(5);
        //return view('pegawai.index',compact('pegawai'))
        //    ->with('i', (request()->input('page', 1) - 1) * 5);
        $id=$request->get('id');
        
        if(!empty($id)){
            $jabatan = DB::table('tpp_maksimal')
                ->join('pangkat', 'tpp_maksimal.tpp_pangkat_id', '=', 'pangkat.pangkat_id')
                ->join('jabatan', 'tpp_maksimal.tpp_jabatan_id', '=', 'jabatan.jabatan_id')
                ->where('tpp_pangkat_id', '=', $id)
                ->get();
            return view('carijabatan.index', ['jabatan' => $jabatan]);
        }else{
            $idp=$request->get('idp');
            $idj=$request->get('idj');
            $jabatan = DB::table('tpp_maksimal')
                ->join('pangkat', 'tpp_maksimal.tpp_pangkat_id', '=', 'pangkat.pangkat_id')
                ->join('jabatan', 'tpp_maksimal.tpp_jabatan_id', '=', 'jabatan.jabatan_id')
                ->where('tpp_pangkat_id', '=', $idp)
                ->where('tpp_jabatan_id', '=', $idj)
                ->get();
            //$hpp_max=$jabatan->tpp_maksimal;
            return view('carijabatan.max', ['jabatan' => $jabatan]);
        }
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pangkat=DB::table('pangkat')->get();
        $jabatan=DB::table('jabatan')->get();
        return view('pegawai.create',['pangkat'=>$pangkat,'jabatan'=>$jabatan]);
    }

    public function jabatan()
    {
        //
        $pangkat=DB::table('pangkat')->get();
        $jabatan=DB::table('jabatan')->get();
        return view('pegawai.create',['pangkat'=>$pangkat,'jabatan'=>$jabatan]);
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
        $request->validate([
            'pegawai_nip' => 'required',
            'pegawai_nama' => 'required',
            'pegawai_pangkat' => 'required',
            'pegawai_jabatan' => 'required',
            'pegawai_tpp_maksimal' => 'required',
        ]);

  

        Pegawai::create($request->all());

   

        return redirect()->route('pegawai.index')
                        ->with('success','Pegawai created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
        return view('pegawai.show',compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
        $pangkat=DB::table('pangkat')->get();
        $jabatan=DB::table('jabatan')->get();
        return view('pegawai.edit',compact('pegawai'),['pangkat'=>$pangkat,'jabatan'=>$jabatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
        $request->validate([
            'pegawai_nip' => 'required',
            'pegawai_nama' => 'required',
            'pegawai_pangkat' => 'required',
            'pegawai_jabatan' => 'required',
            'pegawai_tpp_maksimal' => 'required',
        ]);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index')
           ->with('success','Pegawai updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
        $pegawai->delete();
        return redirect()->route('pegawai.index')
            ->with('success','Product deleted successfully');

    }
}
