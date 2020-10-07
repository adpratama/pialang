<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Placing Slip</strong>
          <strong class="float-right">REQUEST FOR PLACING SLIP</strong>
        </div>
        <div class="card-body">
          <form action="<?php echo e(route('placing.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>     
            <input type="hidden" value="UNAPPROVED"  name="status">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-1 col-form-label">Jakarta,</label>
                <div class="col-sm-3 input-group">
                    <input type="text" name="date" class="form-control drgpicker" id="date-input1" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                    </div>
                </div>
            </div>
            
            <p><strong>FIRST CLASS INSURANCE COMPANY</strong> </p>  
            <P>Up : <strong> Marketing / Underwriting Manager</strong></P>
            <div class="form-group row">
                <label for="insurance_id" class="col-sm-2 col-form-label">Lembaga Asuransi</label>
                <div class="col-sm-3 ">
                    <select name="insurance_id" class="form-control <?php $__errorArgs = ['insurance_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option value="">--Pilih Lembaga Asuransi--</option>
                        <?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($insurance->id); ?>"><?php echo e($insurance->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['insurance_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <h2 align="center">INSURANCE PLACING SLIP NO: 000</h2>
            <p>We reference you to give the best quotation for the Insurance Matter with several information and documents attached are</p>
            <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;DATA & INFORMATION</p>
            </div>
            <div class="form-group row">
                <label for="insured" class="col-sm-3 col-form-label">THE INSURED</label>
                <div class="col-sm-9 ">
                    <textarea name="insured" 
                        class="ckeditor form-control <?php $__errorArgs = ['insured'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('insured')); ?></textarea>
                    <?php $__errorArgs = ['insured'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">PERIOD OF INSURANCE</label>
                <div class="col-sm-9 ">
                    <textarea name="period" 
                        class="ckeditor1 form-control <?php $__errorArgs = ['period'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('period')); ?></textarea>
                    <?php $__errorArgs = ['period'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="contract_details" class="col-sm-3 col-form-label">DETAILS OF CONTRACT</label>
                <div class="col-sm-9 ">
                    <textarea name="contract_details" 
                        class="ckeditor2 form-control <?php $__errorArgs = ['contract_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('contract_details')); ?></textarea>
                    <?php $__errorArgs = ['contract_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="warranty" class="col-sm-3 col-form-label">SCOPE OF WORK PROJECT</label>
                <div class="col-sm-6 ">
                    <input type="text" name="scope" 
                        class="form-control <?php $__errorArgs = ['scope'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('scope')); ?></input>
                    <?php $__errorArgs = ['scope'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="scope" class="col-sm-3 col-form-label">TERRITORIAL LIMIT</label>
                <div class="col-sm-3 ">
                    <input type="text" name="territorial" 
                        class="form-control <?php $__errorArgs = ['territorial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('territorial')); ?></input>
                    <?php $__errorArgs = ['territorial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="employee_details" class="col-sm-3 col-form-label">DETAILS OF EMPLOYEE</label>
                <div class="col-sm-9 ">
                    <textarea name="employee_details" 
                        class="ckeditor3 form-control <?php $__errorArgs = ['employee_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('employee_details')); ?></textarea>
                    <?php $__errorArgs = ['employee_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="vehicle_details" class="col-sm-3 col-form-label">DETAILS OF VEHICLE</label>
                <div class="col-sm-9 ">
                    <textarea name="vehicle_details" 
                        class="ckeditor4 form-control <?php $__errorArgs = ['vehicle_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('vehicle_details')); ?></textarea>
                    <?php $__errorArgs = ['vehicle_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;TERMS & CONDITION</p>
            </div>
            <div class="form-group row">
                <label for="cover_type" class="col-sm-3 col-form-label">TYPE OF COVER</label>
                <div class="col-sm-9 ">
                    <textarea name="cover_type" 
                        class="ckeditor5 form-control <?php $__errorArgs = ['cover_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('cover_type')); ?></textarea>
                    <?php $__errorArgs = ['cover_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="coverage" class="col-sm-3 col-form-label">FORM INSURANCE COVERAGE</label>
                <div class="col-sm-9 ">
                    <textarea name="coverage" 
                        class="ckeditor6 form-control <?php $__errorArgs = ['coverage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('coverage')); ?></textarea>
                    <?php $__errorArgs = ['coverage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL & OTHERS</p>
            </div>
            <div class="form-group row">
                <label for="rate" class="col-sm-3 col-form-label">RATE / PREMIUM</label>
                <div class="col-sm-9 ">
                    <textarea name="rate" 
                        class="ckeditor7 form-control <?php $__errorArgs = ['rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('rate')); ?></textarea>
                    <?php $__errorArgs = ['rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="scope" class="col-sm-3 col-form-label">COMPENSATION</label>
                <div class="col-md-3">

                <div class="input-group mb-6">
                    <input type="number" name="compensation" class="form-control" placeholder="Compensation"  aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">% of Premium</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="warranty" class="col-sm-3 col-form-label">PREMIUM WARRANTY</label>
                <div class="col-sm-9 ">
                    <input type="text" name="warranty" 
                        class="form-control <?php $__errorArgs = ['warranty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('warranty')); ?></input>
                    <?php $__errorArgs = ['warranty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="remarks" class="col-sm-3 col-form-label">REMARKS</label>
                <div class="col-sm-9 ">
                    <textarea name="remarks" 
                        class="ckeditor8 form-control <?php $__errorArgs = ['remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('remarks')); ?></textarea>
                    <?php $__errorArgs = ['remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="signfor" class="col-sm-3 col-form-label">SIGN FOR</label>
                <div class="col-sm-6 ">
                    <textarea name="signfor" 
                        class="ckeditor9 form-control <?php $__errorArgs = ['signfor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('signfor')); ?></textarea>
                    <?php $__errorArgs = ['signfor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="confirmby" class="col-sm-3 col-form-label">CONFIRMED BY</label>
                <div class="col-sm-6 ">
                    <textarea name="confirmby" 
                        class="ckeditor10 form-control <?php $__errorArgs = ['confirmby'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('confirmby')); ?></textarea>
                    <?php $__errorArgs = ['confirmby'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor1' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor2' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor3' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor4' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor5' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor6' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor7' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor8' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor9' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
  <script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor10' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/pialang/resources/views/pages/placing/create.blade.php ENDPATH**/ ?>