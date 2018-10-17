<select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan">
                <option value="">Pilih Jabatan</option>
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($jabatan->jabatan_id); ?>"><?php echo e($jabatan->jabatan_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </select>
