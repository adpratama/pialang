<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">        
        <div class="row my-4">
          <!-- Small table -->
          
          <div class="col-md-12">
            <div class="row align-items-center mb-4">
                <div class="col">
                  <h2 class="mb-2 page-title">Data Client</h2>
                </div>
                <div class="col-auto">
                  <a href="<?php echo e(route('clients.create')); ?> " type="button" class="btn btn-secondary" >Tambah</a>          
                </div>
              </div>
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Alamat</th>
                      <th>No. Telepon</th>
                      <th>Email</th>
                      <th>Nama PIC</th>
                      <th>No. HP PIC</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td>
                          
                          <?php echo e($item->id); ?>

                        </td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->address); ?></td>
                        <td><?php echo e($item->phone); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->pic); ?></td>
                        <td><?php echo e($item->phone_pic); ?></td>
                        <td>
                          
                          
                            <a class="btn mb-2 btn-light" href="<?php echo e(route('clients.edit', $item->id)); ?> ">Edit</a>
                            
                            
                          
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td colspan="8" class="text-center p-4">
                            Data tidak tersedia
                        </td>
                      </tr>
                      <?php endif; ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- simple table -->
        </div> <!-- end section -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('before-script'); ?>




<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/pialang/resources/views/pages/clients/index.blade.php ENDPATH**/ ?>