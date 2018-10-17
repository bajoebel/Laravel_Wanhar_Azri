@extends('pegawai.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New pegawai</h2>

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

   

<form action="{{ route('pegawai.store') }}" method="POST">
    <!--{{ csrf_token() }}
    @csrf -->

    <input type="hidden" name="_token" value="{{ @csrf_token() }}">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nip:</strong>

                <input type="text" name="pegawai_nip" class="form-control" placeholder="NIP">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="pegawai_nama" class="form-control" placeholder="Nama">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pangkat:</strong>

                <!--input type="text" name="pegawai_pangkat" class="form-control" placeholder="Pangkat"-->
                <select class="form-control" name="pegawai_pangkat" id="pegawai_pangkat" onchange="tampilJabatan()">
                    <option value="">Pilih Pangkat</option>
                    @foreach ($pangkat as $pangkat)
                    <option value="{{ $pangkat->pangkat_id }}">{{ $pangkat->pangkat_nama }}</option>
                    @endforeach 
                </select>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan:</strong>

                <!--input type="text" name="pegawai_jabatan" class="form-control" placeholder="Jabatan"-->
                <select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan" onclick="tampilTpp()">
                <option value="">Pilih Jabatan</option>
                    @foreach ($jabatan as $jabatan)
                    <option value="{{ $jabatan->jabatan_id }}">{{ $jabatan->jabatan_nama }}</option>
                    @endforeach 
                </select>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <div id="pegawai_tpp_maksimal">
                <strong>TPP Maksimal:</strong>
                
                <input type="text" name="pegawai_tpp_maksimal" class="form-control" id="pegawai_tpp_maksimal" placeholder="TPP Maksimal">
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>
<script type="text/javascript">
    function tampilJabatan()
    {
       pangkat = document.getElementById("pegawai_pangkat").value;
       $.ajax({
         url:"{{ route('carijabatan.index') }}"+ "?id=" +pangkat+"",
         success: function(response){
         $("#pegawai_jabatan").html(response);
         },
         dataType:"html"
       });
      
       return false;
       //alert(pangkat);
    }

    function tampilTpp()
    {
       pangkat = document.getElementById("pegawai_pangkat").value;
       jabatan = document.getElementById("pegawai_jabatan").value;
       url="{{ route('carijabatan.index') }}"+ "?idp=" +pangkat+"&&idj=" + jabatan;
       console.log(url);
       $.ajax({
         url:"{{ route('carijabatan.index') }}"+ "?idp=" +pangkat+"&&idj=" + jabatan,
         success: function(response){
         $("#pegawai_tpp_maksimal").html(response);
         },
         dataType:"html"
       });
      
       return false;
       //alert(pangkat);
    }
</script>
@endsection