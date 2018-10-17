@extends('pegawai.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit pegawai</h2>

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

  

    <form action="{{ route('pegawai.update',$pegawai->id) }}" method="POST">

        <!--@csrf
-->
        @method('PUT')
        <input type="hidden" name="_token" value="{{ @csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

         <div class="row">

            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nip:</strong>

                    <input type="text" name="pegawai_nip" value="{{ $pegawai->pegawai_nip }}" class="form-control" placeholder="NIP">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama:</strong>

                    <input type="text" name="pegawai_nama" class="form-control" value="{{ $pegawai->pegawai_nama }}" placeholder="Nama">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pangkat:</strong>

                    <input type="text" name="pegawai_pangkat" class="form-control" value="{{ $pegawai->pegawai_pangkat }}" placeholder="Pangkat">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jabatan:</strong>

                    <input type="text" name="pegawai_jabatan" value="{{ $pegawai->pegawai_jabatan }}" class="form-control" placeholder="Jabatan">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>TPP Maksimal:</strong>

                    <input type="text" name="pegawai_tpp_maksimal" value="{{ $pegawai->pegawai_tpp_maksimal }}" class="form-control" placeholder="TPP Maksimal">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection