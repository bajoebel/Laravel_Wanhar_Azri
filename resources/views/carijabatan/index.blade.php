<select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan">
                <option value="">Pilih Jabatan</option>
                    @foreach ($jabatan as $jabatan)
                    <option value="{{ $jabatan->jabatan_id }}">{{ $jabatan->jabatan_nama }}</option>
                    @endforeach 
                </select>
