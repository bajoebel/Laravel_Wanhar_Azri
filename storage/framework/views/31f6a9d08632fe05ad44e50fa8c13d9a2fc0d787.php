 

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Data hpp</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="<?php echo e(route('tpp.create')); ?>"> Create New hpp</a>

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
            <th>Point Kehadiran</th>
            <th>Point Kinerja</th>
            <th>HPP</th>
            <th width="280px">Action</th>

        </tr>
        <?php $i=0; ?>
        <?php $__currentLoopData = $hpp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hpp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
        $kehadiran=(3/100)*$hpp->pegawai_tpp_maksimal -((5/100)*$hpp->tpp_tanpaalasan + (3/100)*$hpp->tpp_izin+(3/100)*(($hpp->tpp_terlambat+$hpp->tpp_cepatpulang)/300))*(30/100)*$hpp->pegawai_tpp_maksimal;
        $kinerja="";
        $hpp="";

        ?>
        <tr>

            <td><?php echo e(++$i); ?></td>

            <td><?php echo e($hpp->pegawai_nip); ?></td>

            <td><?php echo e($hpp->pegawai_nama); ?></td>
            <td><?php echo e($hpp->pegawai_pangkat); ?></td>
            <td><?php echo e($hpp->pegawai_jabatan); ?></td>
            <td><?php echo e($hpp->pegawai_tpp_maksimal); ?></td>
            <td><?php echo e($kehadiran); ?></td>
            <td><?php echo e($kinerja); ?></td>
            <td><?php echo e($hpp); ?></td>
            <td>

                <form action="<?php echo e(route('tpp.destroy',$hpp->id)); ?>" method="POST">

   

                    <a class="btn btn-info" href="<?php echo e(route('tpp.show',$hpp->id)); ?>">Show</a>

    

                    <a class="btn btn-primary" href="<?php echo e(route('tpp.edit',$hpp->id)); ?>">Edit</a>

   

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
<?php echo $__env->make('hpp.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>