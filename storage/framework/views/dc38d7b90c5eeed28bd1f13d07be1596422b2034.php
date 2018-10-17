<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="<?php echo e(route('pegawai.index')); ?>"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <?php echo e($pegawai->pegawai_nik); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <?php echo e($pegawai->pegawai_nama); ?>


            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pangkat:</strong>

                <?php echo e($pegawai->pegawai_pangkat); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Jabatan:</strong>

                <?php echo e($pegawai->pegawai_jabatan); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>TPP Maksimal:</strong>

                <?php echo e($pegawai->pegawai_tpp_maksimal); ?>


            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawai.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>