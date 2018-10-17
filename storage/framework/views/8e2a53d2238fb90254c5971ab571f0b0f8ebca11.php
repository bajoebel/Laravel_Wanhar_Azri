  

<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New pegawai</h2>

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

   

<form action="<?php echo e(route('pegawai.store')); ?>" method="POST">
    <!--<?php echo e(csrf_token()); ?>

    @csrf  -->

    <input type="hidden" name="_token" value="<?php echo e(@csrf_token()); ?>">
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
                    <?php $__currentLoopData = $pangkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($pangkat->pangkat_id); ?>"><?php echo e($pangkat->pangkat_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </select>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan:</strong>

                <!--input type="text" name="pegawai_jabatan" class="form-control" placeholder="Jabatan"-->
                <select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan" onclick="tampilTpp()">
                <option value="">Pilih Jabatan</option>
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($jabatan->jabatan_id); ?>"><?php echo e($jabatan->jabatan_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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