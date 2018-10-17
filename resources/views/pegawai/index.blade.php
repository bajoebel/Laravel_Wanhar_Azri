@extends('pegawai.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Create New pegawai</a>

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

            <th width="280px">Action</th>

        </tr>
        <?php $i=0; ?>
        @foreach ($pegawai as $pegawai)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $pegawai->pegawai_nip }}</td>

            <td>{{ $pegawai->pegawai_nama }}</td>
            <td>{{ $pegawai->pangkat_nama }}</td>
            <td>{{ $pegawai->jabatan_nama }}</td>
            <td>{{ $pegawai->pegawai_tpp_maksimal }}</td>
            <td>

                <form action="{{ route('pegawai.destroy',$pegawai->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('pegawai.show',$pegawai->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('pegawai.edit',$pegawai->id) }}">Edit</a>

   

                    <!--@csrf

                    @method('DELETE')
    -->
      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    

      

@endsection