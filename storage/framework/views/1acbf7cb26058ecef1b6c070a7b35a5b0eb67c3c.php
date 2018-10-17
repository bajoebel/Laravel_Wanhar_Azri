   

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(route('pegawai.index')); ?>"> Back</a>

            </div>

        </div>

    </div>

   

    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>

  

    <form action="<?php echo e(route('pegawai.update',$pegawai->id)); ?>" method="POST">

        <!--@csrf
-->
        @method('PUT')
        <input type="hidden" name="_token" value="<?php echo e(@csrf_token()); ?>">
        <input type="hidden" name="_method" value="PUT">

         <div class="row">

            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nip:</strong>

                    <input type="text" name="pegawai_nip" value="<?php echo e($pegawai->pegawai_nip); ?>" class="form-control" placeholder="NIP">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama:</strong>

                    <input type="text" name="pegawai_nama" class="form-control" value="<?php echo e($pegawai->pegawai_nama); ?>" placeholder="Nama">

                </div>

            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pangkat:</strong>

                    <!--input type="text" name="pegawai_pangkat" class="form-control" placeholder="Pangkat"-->
                    <select class="form-control" name="pegawai_pangkat" id="pegawai_pangkat" onclick="tampilJabatan()">
                        <option value="">Pilih Pangkat</option>
                        <?php $__currentLoopData = $pangkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pangkat->pangkat_id); ?>" <?php if($pangkat->pangkat_id==$pegawai->pegawai_pangkat) echo "selected"; ?>><?php echo e($pangkat->pangkat_nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jabatan:</strong>

                    <!--input type="text" name="pegawai_jabatan" class="form-control" placeholder="Jabatan"-->
                    <select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan" onchange="tampilTpp()">
                        <option value="">Pilih Jabatan</option>
                        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($jabatan->jabatan_id); ?>" <?php if($jabatan->jabatan_id==$pegawai->pegawai_jabatan) echo "selected"; ?>><?php echo e($jabatan->jabatan_nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <div id="pegawai_tpp_maksimal">
                        <strong>TPP Maksimal:</strong>

                        <input type="text" name="pegawai_tpp_maksimal" value="<?php echo e($pegawai->pegawai_tpp_maksimal); ?>" class="form-control" placeholder="TPP Maksimal">
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
         url:"<?php echo e(route('carijabatan.index')); ?>"+ "?id=" +pangkat+"",
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
       url="<?php echo e(route('carijabatan.index')); ?>"+ "?idp=" +pangkat+"&&idj=" + jabatan;
       console.log(url);
       $.ajax({
         url:"<?php echo e(route('carijabatan.index')); ?>"+ "?idp=" +pangkat+"&&idj=" + jabatan,
         success: function(response){
         $("#pegawai_tpp_maksimal").html(response);
         },
         dataType:"html"
       });
      
       return false;
       //alert(pangkat);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawai.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>