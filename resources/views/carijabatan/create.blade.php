@extends('pegawai.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New HPP</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('pegawai.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach
        </ul>

    </div>

@endif

   

<form action="{{ route('tpp.store') }}" method="POST">
    <!--{{ csrf_token() }}
    @csrf -->
    
    <input type="hidden" name="_token" value="{{ @csrf_token() }}">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pegawai:</strong>
                <select class="form-control" name="tpp_pegawai_id">
                    @foreach ($pegawai as $pegawai)
                    <option value="{{ $pegawai->id }}">{{ $pegawai->pegawai_nip ." - " .$pegawai->pegawai_nama }}</option>
                    @endforeach 
                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>Bulan:</strong>

                <select class="form-control" name="tpp_bulan">
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>

                </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>Tahun:</strong>

                <input type="text" name="tpp_tahun" class="form-control" placeholder="Tahun">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jml Hari Kerja:</strong>

                <input type="text" name="tpp_harikerja" class="form-control" placeholder="Jml Hari Kerja">

            </div>

        </div>

        <!--div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Hadir:</strong>

                <input type="text" name="tpp_hadir" class="form-control" placeholder="Hadir">

            </div>

        </div-->

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Izin:</strong>

                <input type="text" name="tpp_izin" class="form-control" placeholder="Izin">

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Cuti:</strong>

                <input type="text" name="tpp_cuti" class="form-control" placeholder="Cuti">

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Tanpa Alasan:</strong>

                <input type="text" name="tpp_tanpaalasan" class="form-control" placeholder="Tanpa ALasan">

            </div>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Hadir:</strong>

                <input type="text" name="tpp_hadir" class="form-control" placeholder="Hadir">

            </div>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Terlambat:</strong>

                <input type="text" name="tpp_terlambat" class="form-control" placeholder="Terlambat">

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Cepat Pulang:</strong>

                <input type="text" name="tpp_cepatpulang" class="form-control" placeholder="Cepat Pulang">

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>UWAS:</strong>

                <input type="text" name="tpp_uwas" class="form-control" placeholder="UWAS">

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>Upacara:</strong>

                <input type="text" name="tpp_upacara" class="form-control" placeholder="Upcara">

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Wirid:</strong>

                <input type="text" name="tpp_wirid" class="form-control" placeholder="Wirid">

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Apel:</strong>

                <input type="text" name="tpp_apel" class="form-control" placeholder="Apel">

            </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">

            <div class="form-group">

                <strong>Senam:</strong>

                <input type="text" name="tpp_senam" class="form-control" placeholder="Senam">

            </div>

        </div>

        <hr>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>SKP:</strong>

                <input type="text" name="tpp_skp" class="form-control" placeholder="SKP">

            </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2">

            <div class="form-group">

                <strong>Pelayanan:</strong>

                <input type="text" name="tpp_pelayanan" class="form-control" placeholder="Pelayanan">

            </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2">

            <div class="form-group">

                <strong>Integritas:</strong>

                <input type="text" name="tpp_integritas" class="form-control" placeholder="Integritas">

            </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2">

            <div class="form-group">

                <strong>Komitmen:</strong>

                <input type="text" name="tpp_komitmen" class="form-control" placeholder="Komitmen">

            </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2">

            <div class="form-group">

                <strong>Disiplin:</strong>

                <input type="text" name="tpp_disiplin" class="form-control" placeholder="Disiplin">

            </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2">

            <div class="form-group">

                <strong>Kerja Sama:</strong>

                <input type="text" name="tpp_kerjasama" class="form-control" placeholder="Kerja Sama">

            </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-2">

            <div class="form-group">

                <strong>Kepemimpinan:</strong>

                <input type="text" name="tpp_kepemimpinan" class="form-control" placeholder="Kepemimpinan">

            </div>

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>LKH:</strong>

                <input type="text" name="tpp_lkh" class="form-control" placeholder="LKH">

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>SOP:</strong>

                <input type="text" name="tpp_sop" class="form-control" placeholder="SOP">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection