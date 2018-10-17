 

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data pegawai</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="<?php echo e(route('pegawai.create')); ?>"> Create New pegawai</a>

            </div>

        </div>

    </div>

   

    <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success">

            <p><?php echo e($message); ?></p>

        </div>

    <?php endif; ?>

   

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
        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e(++$i); ?></td>

            <td><?php echo e($pegawai->pegawai_nip); ?></td>

            <td><?php echo e($pegawai->pegawai_nama); ?></td>
            <td><?php echo e($pegawai->pangkat_nama); ?></td>
            <td><?php echo e($pegawai->jabatan_nama); ?></td>
            <td><?php echo e($pegawai->pegawai_tpp_maksimal); ?></td>
            <td>

                <form action="<?php echo e(route('pegawai.destroy',$pegawai->id)); ?>" method="POST">

   

                    <a class="btn btn-info" href="<?php echo e(route('pegawai.show',$pegawai->id)); ?>">Show</a>

    

                    <a class="btn btn-primary" href="<?php echo e(route('pegawai.edit',$pegawai->id)); ?>">Edit</a>

   

                    <!--@csrf

                    @method('DELETE')
    -->
      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

  

    

      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawai.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>