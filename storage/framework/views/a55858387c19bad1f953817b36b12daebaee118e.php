<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">        
        <div class="row my-4">
          <!-- Small table -->
          
          <div class="col-md-12">
            <div class="row align-items-center mb-4">
                <div class="col">
                  <h2 class="page-title">Quotation Slip</h2>
                </div>
                
            </div>
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tanggal</th>
                      
                      <th>Insured</th>
                      <th>Status</th>
                      <th>Aksi</th>
                      <th>Cetak</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $quotations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td><?php echo e($quotation->id); ?> </td>
                        <td><?php echo e($quotation->date); ?></td>
                        <td><?php echo e($quotation->insureds->name); ?>  </td>

                        
                        <td>
                          <?php if($quotation->status == 'UNAPPROVED'): ?>
                              <span class="badge badge-warning">
                          <?php elseif($quotation->status == 'APPROVED'): ?>
                              <span class="badge badge-success">
                          <?php elseif($quotation->status == 'REJECTED'): ?>
                              <span class="badge badge-danger">
                          <?php else: ?> 
                              <span>
                          <?php endif; ?>
                          <?php echo e($quotation->status); ?>

                        </td>
                        <td>
                          <?php if($quotation->status == 'UNAPPROVED'): ?>
                              <a href="<?php echo e(route('placing.status', $quotation->id)); ?>?status=APPROVED" class="btn btn-success ">                                                     
                                  APPROVE
                              </a>
                              <a href="<?php echo e(route('placing.status', $quotation->id)); ?>?status=REJECTED" class="btn btn-danger ">                                                     
                                  REJECT
                              </a>
                              <a class="btn btn-light " href="<?php echo e(route('placing.edit', $quotation->id)); ?> ">Edit</a>

                          <?php endif; ?>                          
                        </td>
                        <td>
                          <a class="btn btn-light " href="<?php echo e(route('quotation.show', $quotation->id)); ?> "><i class="fe fe-file-text"></i></a>
                          <a class="btn btn-light " href="<?php echo e(route('placing.show', $quotation->id)); ?> ">Invoice</a>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td colspan="9" class="text-center p-4">
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

<?php $__env->startPush('after-script'); ?>
<script src='<?php echo e(asset('js/jquery.dataTables.min.js')); ?>'></script>
<script src='<?php echo e(asset('js/dataTables.bootstrap4.min.js')); ?>'></script>
<script>
  $('#dataTable-1').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [16, 32, 64, -1],
      [16, 32, 64, "All"]
    ]
  });
</script> --}}
{{-- <script src="js/apps.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/pialang/resources/views/pages/quotation/index.blade.php ENDPATH**/ ?>