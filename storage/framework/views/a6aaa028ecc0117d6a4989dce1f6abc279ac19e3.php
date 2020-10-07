<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  
  <div class="row justify-content-center">
  
    <div class="col-12">        
  
      <div class="row my-4">
          <!-- Small table -->
          
  
        <div class="col-md-12">
        
          <div class="row align-items-center mb-4">
        
            <div class="col">
        
              <h2 class="page-title">Placing Slip</h2>
        
            </div>
        
            <div class="col-auto">
        
              <a href="<?php echo e(route('placing.create')); ?> " type="button" class="btn btn-secondary" >
                Tambah
              </a>          
        
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
                    <th>Insurance</th>
                    <th>Insured</th>
                    <th>Status</th>
                    
                    <th>Aksi</th>
                    
                  </tr>
                
                </thead>
                
                <tbody>
                
                  <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                
                  <tr>
                
                    <td><?php echo e($item->id); ?> </td>
                    <td><?php echo e($item->date); ?></td>
                    <td><?php echo e($item->insurance->name); ?></td>
                    <td><?php echo substr($item->insured, 11, 50); ?></td>
                    <td>
                          
                      <?php if($item->status == 'UNAPPROVED'): ?>
                      
                        <span class="badge " style="background-color: #ffda83 !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                      
                      <?php elseif($item->status == 'APPROVED'): ?>
                        
                        <span class="badge " style="background-color: #69E4A6 !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                        
                      <?php elseif($item->status == 'REJECTED'): ?>
                      
                        <span class="badge " style="background-color: #fabebe !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                        
                      <?php else: ?> 
                       
                        <span>
                        
                      <?php endif; ?>
                          <?php echo e($item->status); ?>

                       
                    </td>
                    

                    
                    <td>
                      <div class="dropdown">
                        <button style="background-color: #3294fe !important; color: #ffffff;"  class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          <span class="text-muted sr-only">Action</span>
                          Tindakan
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                          
                          <?php if($item->status == 'UNAPPROVED'): ?>
                    
                            <a href="<?php echo e(route('placing.status', $item->id)); ?>?status=APPROVED" 
                              class="dropdown-item ">
                              <i class="fe fe-check"></i>
                              APPROVE
                            </a>
                            
                            <a href="<?php echo e(route('placing.status', $item->id)); ?>?status=REJECTED" 
                              class="dropdown-item">                                                     
                              <i class="fe fe-x"></i>
                              REJECT
                            </a>
                            
                            <a class="dropdown-item " 
                              href="<?php echo e(route('placing.edit', $item->id)); ?> ">
                                <i class="fe fe-edit"></i>
                              Edit
                            </a>

                          <?php endif; ?>
                          <?php if($item->status == 'APPROVED'): ?>
                      
                            <a href="<?php echo e(route('quotation.qs', $item->id)); ?> " 
                              class="dropdown-item ">
                                Create Quotation
                            </a>
                                  
                          <?php endif; ?>
                            <a class="dropdown-item " 
                              href="<?php echo e(route('placing.show', $item->id)); ?> ">
                                <i class="fe fe-file-text"></i>
                                Cetak
                            </a>
                        </div>
                      </div>
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
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/pialang/resources/views/pages/placing/index.blade.php ENDPATH**/ ?>