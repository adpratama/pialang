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
                <div class="col-auto">
                  <a href="<?php echo e(route('quotation.create')); ?> " type="button" class="btn btn-secondary" >Tambah</a>          
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
                    </tr>
                  </thead>
                  
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