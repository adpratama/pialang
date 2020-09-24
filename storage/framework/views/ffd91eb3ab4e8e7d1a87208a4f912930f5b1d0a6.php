<?php $__env->startSection('content'); ?>

<div class="container-fluid" style="background-color: white">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-9">
        
            
            
            <div class="card-body p-8">
                <h4 class="float-right" style="background-color: black; color:white">REQUEST FOR QUOTATION SLIP</h4> <br /><br /><br />
                <p >Jakarta, <?php echo e($item->date); ?></p>
                    
                
                <p><strong>FIRST CLASS INSURANCE COMPANY</strong> </p>  
                <P>Up : <strong> Marketing / Underwriting Manager</strong></P>
                <h4 align="center">INSURANCE PLACING SLIP NO: <?php echo e($item->id); ?> </h4>
                <p>We reference you to give the best quotation for the Insurance Matter with several information and documents attached are</p>
                <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;DATA & INFORMATION</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >THE INSURED</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->insured; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >PERIOD OF INSURANCE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->period; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >DETAILS OF CONTRACT</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->contract_details; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >SCOPE OF WORK PROJECT</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->scope; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >TERRITORIAL LIMIT</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->territorial; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >DETAILS OF EMPLOYEE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->employee_details; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >DETAILS OF VEHICLE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->vehicle_details; ?>

                    </div>                    
                </div>
                <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;TERMS & CONDITION</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >TYPE OF COVER</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->cover_type; ?>

                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <p >FORM INSURANCE COVERAGE</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->coverage; ?>

                    </div>                    
                </div>
                <div class="row" style="background-color: rgb(153, 150, 150); display: block">
                    <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL & OTHERS</p>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >RATE/PREMIUM</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->rate; ?>

                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >COMPENSATION</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->compensation; ?>% of Premium
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >PREMIUM WARRANTY</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->warranty; ?>

                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:0">
                    <div class="col-sm-3">
                        <p >REMARKS</p>
                    </div>                    
                    <div class="col-sm-9 ">
                        <?php echo $item->remarks; ?>

                    </div>
                </div>
                <div class="col-sm-12">
                    
                <div class="form-group row" style="margin-bottom:0">              
                    <div class="col-sm-6 ">
                        <p style="margin-bottom:0">E & O E</p> 
                <p style="margin-bottom:0" >Signed For and on behalf of</p>
                        <?php echo $item->signfor; ?>

                    </div>
                    <div class="col-sm-6 " align="right">
                        <p style="margin-bottom:0">&nbsp;</p> 
                        <p style="margin-bottom:0; text-align:right"  >Noted and Confirmed by</p>
                        <?php echo $item->confirmby; ?>

                    </div>
                </div>
                </div>
                
            </div> <!-- /. card-body -->
        
    </div> <!-- /. col -->
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/pialang/resources/views/pages/placing/show.blade.php ENDPATH**/ ?>