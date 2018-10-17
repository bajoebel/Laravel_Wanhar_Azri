@extends('pegawai.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('pegawai.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $pegawai->pegawai_nik }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $pegawai->pegawai_nama }}

            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pangkat:</strong>

                {{ $pegawai->pegawai_pangkat }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan:</strong>

                {{ $pegawai->pegawai_jabatan }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>TPP Maksimal:</strong>

                {{ $pegawai->pegawai_tpp_maksimal }}

            </div>

        </div>
    </div>

@endsection