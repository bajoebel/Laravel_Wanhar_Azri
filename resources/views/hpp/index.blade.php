@extends('hpp.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data hpp</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('tpp.create') }}"> Create New hpp</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Jabatan</th>
            <th>TPP Maksimal</th>
            <th>Point Kehadiran</th>
            <th>Point Kinerja</th>
            <th>HPP</th>
            <th width="280px">Action</th>

        </tr>
        <?php $i=0; ?>
        @foreach ($hpp as $hpp)
        <?php 
        $kehadiran=(3/100)*$hpp->pegawai_tpp_maksimal -((5/100)*$hpp->tpp_tanpaalasan + (3/100)*$hpp->tpp_izin+(3/100)*(($hpp->tpp_terlambat+$hpp->tpp_cepatpulang)/300))*(30/100)*$hpp->pegawai_tpp_maksimal;
        $kinerja="";
        $hpp="";

        ?>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $hpp->pegawai_nip }}</td>
            <td>{{ $hpp->pegawai_nama }}</td>
            <td>{{ $hpp->pegawai_pangkat }}</td>
            <td>{{ $hpp->pegawai_jabatan }}</td>
            <td>{{ $hpp->pegawai_tpp_maksimal }}</td>
            <td>{{ $kehadiran }}</td>
            <td>{{ $kinerja }}</td>
            <td>{{ $hpp }}</td>
            <td>

                <form action="{{ route('tpp.destroy',$hpp->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('tpp.show',$hpp->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('tpp.edit',$hpp->id) }}">Edit</a>

   

                    <!--@csrf

                    @method('DELETE')
    -->
                    <input type="hidden" name="_methode" value="DELETE">

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    

      

@endsection