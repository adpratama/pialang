@extends('layouts.default')

@section('content')
<div class="row">

   <div class="col-md-12">

      <div class="card shadow mb-4">
   
         <div class="card-header">
   
            {{-- <strong class="card-title">CLOSING INSTRUCTION NO: 0000</strong> --}}
   
            <strong class="float-right">CLOSING INSTRUCTION</strong>
   
         </div>
   
         <div class="card-body">
   
            <form action="{{ route('instruct.store') }}" method="POST">   
               @csrf
   
               {{-- <input type="hidden" value="UNAPPROVED" name="status"> --}}
   
               {{-- Place and Date --}}
               <div class="form-group row">
   
                  <label for="inputEmail3" 
                         class="col-sm-1 col-form-label">Jakarta,
                  </label>
   
                  <div class="col-sm-3 input-group">
   
                     <input type="date" 
                            name="date" 
                            class="form-control drgpicker" 
                            id="date-input1"
                            aria-describedby="button-addon2">

                  </div>

               </div>
               
               {{-- Nama Perusahaan name="name" --}}
               
               <input type="hidden" 
                      name="quotation_id" 
                      value="{{$quotation->id}} " 
                      readonly
               >

               <div class="form-group row">
                  {{-- <label for="simple-select2" class="col-sm-1 col-form-label">Simple Select</label> --}}
                  <div class="col-sm-4 input-group">
                     <select id="simple-select2" 
                           name="insurance_id"
                           class="form-control select2">

                        <option style="text-align: center">--Pilih Asuransi--</option>
                        @foreach ($insurances as $insurance)
                           <option value="{{$insurance->id}} ">{{$insurance->name}} </option>
                        @endforeach
                     </select>
                  </div>
              </div> <!-- form-group -->
               <div class="form-group row">
                  
                  <label for="insured_id" 
                        class="col-sm-1 col-form-label">
                        Insured
                  </label>
               
                  <div class="col-sm-3 ">
                     <input type="text" 
                           name="insured_id"
                           class="form-control @error('insured_id') is-invalid @enderror"                     
                           value="{{ old('insured_id')?old('insured_id'):$quotation->insured_id}}"
                           readonly>
                     </input>
               
                     @error('insured_id') 
                        <div class="text-muted">{{ $message }}</div> 
                     @enderror               
                  </div>
               
               </div>
               <h2 align="center">CLOSING INSTRUCTION NO: 0000</h2>
               
               <p>We reference you to give the best quotation for the Insurance Matter with several information and documents attached are</p>
                  
               <div class="row" 
                    style="background-color: rgb(153, 150, 150); display: block">
               
                  <p style="color: black;">
                     &nbsp;&nbsp;&nbsp;&nbsp;DATA & INFORMATION
                  </p>
               
               </div>
               
               {{-- The Insured  --}}
               <div class="form-group row">
               
                  <label for="insured" 
                         class="col-sm-3 col-form-label">
                         THE INSURED
                  </label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="insured"               
                               class="ckeditor form-control @error('insured') is-invalid @enderror">
                              {{ old('insured')?old('insured'):$quotation->insured}}
                     </textarea>
               
                     @error('insured') 
                        <div class="text-muted">{{ $message }}</div> 
                     @enderror
               
                  </div>

               </div>
               
               {{-- Period of Insurance --}}
               <div class="form-group row">
               
                  <label for="inputEmail3" 
                         class="col-sm-3 col-form-label">
                         PERIOD OF INSURANCE
                  </label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="period"
                               class="ckeditor1 form-control @error('period') is-invalid @enderror">
                               {{ old('period')?old('period'):$quotation->period}}
                     </textarea>
                     
                     @error('period') 
                        <div class="text-muted">{{ $message }}</div> 
                     @enderror
               
                  </div>
               
               </div>
               
               {{-- Details of Contract --}}
               <div class="form-group row">
               
                  <label for="contract_details" 
                         class="col-sm-3 col-form-label">
                         DETAILS OF CONTRACT
                  </label>
               
                  <div class="col-sm-9 ">
                     <textarea name="contract_details"
                              class="ckeditor2 form-control @error('contract_details') is-invalid @enderror">
                              {{ old('contract_details')?old('contract_details'):$quotation->contract_details}}
                     </textarea>
                     
                     @error('contract_details') 
                        <div class="text-muted">{{ $message }}</div> 
                     @enderror
                  </div>
               
               </div>
               
               {{-- Scope of Work Project --}}
               <div class="form-group row">
               
                  <label for="warranty" 
                         class="col-sm-3 col-form-label">
                         SCOPE OF WORK PROJECT
                  </label>
               
                  <div class="col-sm-6 ">
                     <input type="text" 
                            name="scope"
                            class="form-control @error('scope') is-invalid @enderror"                     
                            value="{{ old('scope')?old('scope'):$quotation->scope}}">
                     </input>
               
                     @error('scope') 
                        <div class="text-muted">{{ $message }}</div> 
                     @enderror               
                  </div>
               
               </div>
               
               {{-- Territorial Limit --}}
               <div class="form-group row">
               
                  <label for="scope" class="col-sm-3 col-form-label">TERRITORIAL LIMIT</label>
               
                  <div class="col-sm-3 ">
               
                     <input type="text" name="territorial"               
                        class="form-control @error('territorial') is-invalid @enderror"
                        value="{{ old('territorial')?old('territorial'):$quotation->territorial}}">
                     </input>
               
                     @error('territorial') <div class="text-muted">{{ $message }}</div> @enderror
               
                  </div>
               
               </div>
               
               {{-- Details of Employee --}}
               <div class="form-group row">
               
                  <label for="employee_details" class="col-sm-3 col-form-label">DETAILS OF EMPLOYEE</label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="employee_details"               
                        class="ckeditor3 form-control @error('employee_details') is-invalid @enderror">
                        
                        {{ old('employee_details')?old('employee_details'):$quotation->employee_details}}

                     </textarea>
                  
                     @error('employee_details') <div class="text-muted">{{ $message }}</div> @enderror
                  
                  </div>
               
               </div>
               
               {{-- Details of Vehicle --}}
               <div class="form-group row">
               
                  <label for="vehicle_details" class="col-sm-3 col-form-label">DETAILS OF VEHICLE</label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="vehicle_details"
                        class="ckeditor4 form-control @error('vehicle_details') is-invalid @enderror">
                        
                        {{ old('vehicle_details')?old('vehicle_details'):$quotation->vehicle_details}}

                     </textarea>
                     
                     @error('vehicle_details') <div class="text-muted">{{ $message }}</div> @enderror
                  
                  </div>
                  
               </div>
               
               {{-- Terms and Condition --}}
               <div class="row" style="background-color: rgb(153, 150, 150); display: block">
               
                  <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;TERMS & CONDITION</p>
               
               </div>

               {{-- Type of Cover --}}
               <div class="form-group row">
               
                  <label for="cover_type" class="col-sm-3 col-form-label">TYPE OF COVER</label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="cover_type"               
                        class="ckeditor5 form-control @error('cover_type') is-invalid @enderror">
                        
                        {{ old('cover_type')?old('cover_type'):$quotation->cover_type}}

                     </textarea>
                     
                     @error('cover_type') <div class="text-muted">{{ $message }}</div> @enderror
                     
                  </div>
                  
               </div>
               
               {{-- Form Insurance Coverage --}}
               <div class="form-group row">
               
                  <label for="coverage" class="col-sm-3 col-form-label">FORM INSURANCE COVERAGE</label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="coverage"               
                        class="ckeditor6 form-control @error('coverage') is-invalid @enderror">
                        
                        {{ old('coverage')?old('coverage'):$quotation->coverage}}

                     </textarea>
                     
                     @error('coverage') <div class="text-muted">{{ $message }}</div> @enderror
                     
                  </div>
                  
               </div>
               
               {{-- Financial and Others --}}
               <div class="row" style="background-color: rgb(153, 150, 150); display: block">
               
                  <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL & OTHERS</p>
               
               </div>
               
               {{-- Rate / Premium --}}
               <div class="form-group row">
               
                  <label for="premium" class="col-sm-3 col-form-label">Premium</label>
               
                  <div class="col-sm-3 ">
               
                     <input type="number" name="premium"               
                        class="form-control @error('premium') is-invalid @enderror"
                        value="{{ old('premium')}}">
                     </input>
               
                     @error('premium') <div class="text-muted">{{ $message }}</div> @enderror
               
                  </div>
               
               </div>
               <div class="form-group row">
               
                  <label for="policy_cost" class="col-sm-3 col-form-label">Policy Cost and Admin Fee</label>
               
                  <div class="col-sm-3 ">
               
                     <input type="number" name="policy_cost"               
                        class="form-control @error('policy_cost') is-invalid @enderror"
                        value="{{ old('policy_cost')}}">
                     </input>
               
                     @error('policy_cost') <div class="text-muted">{{ $message }}</div> @enderror
               
                  </div>
               
               </div>
               <div class="form-group row">
               
                  <label for="rate" class="col-sm-3 col-form-label">Kurs per Tanggal</label>
               
                  <div class="col-sm-3 ">
               
                     <input type="number" name="rate"               
                        class="form-control @error('rate') is-invalid @enderror"
                        value="{{ old('rate')}}">
                     </input>
               
                     @error('rate') <div class="text-muted">{{ $message }}</div> @enderror
               
                  </div>
               
               </div>
               {{-- Compensation  --}}
               {{-- <div class="form-group row">
               
                  <label for="scope" class="col-sm-3 col-form-label">COMPENSATION</label>
               
                  <div class="col-md-3">

                     <div class="input-group mb-6">

                        <input type="number" name="compensation" class="form-control" placeholder="Compensation"
                                 aria-describedby="basic-addon2">

                        <div class="input-group-append">

                           <span class="input-group-text" id="basic-addon2">% of Premium</span>

                        </div>

                     </div>

                  </div>

               </div> --}}

               {{-- Premium Warranty --}}
               <div class="form-group row">

                  <label for="warranty" class="col-sm-3 col-form-label">PREMIUM WARRANTY</label>

                  <div class="col-sm-9 ">

                     <input type="text" 
                           name="warranty"                                                        
                           value=" {{ old('warranty')}} "
                           class="form-control @error('warranty') is-invalid @enderror">
                     </input>
                     
                     @error('warranty') <div class="text-muted">{{ $message }}</div> @enderror
                  
                  </div>
               
               </div>
               
               {{-- Remarks --}}
               <div class="form-group row">
               
                  <label for="other" class="col-sm-3 col-form-label">OTHER T/C</label>
               
                  <div class="col-sm-9 ">
               
                     <textarea name="other"
                           class="ckeditor8 form-control @error('other') is-invalid @enderror">
                           {{ old('other')?old('other'):$quotation->remarks}}
                     </textarea>
                        
                     @error('other') <div class="text-muted">{{ $message }}</div> @enderror
                  
                  </div>
               
               </div>
               
               {{-- Sign for --}}
               <div class="form-group row">
               
                  <label for="signfor" class="col-sm-3 col-form-label">SIGN FOR</label>
               
                  <div class="col-sm-6 ">
               
                     <textarea name="signfor"
                           class="ckeditor9 form-control @error('signfor') is-invalid @enderror">
                           {{ old('signfor')}}
                     </textarea>
                     
                     @error('signfor') <div class="text-muted">{{ $message }}</div> @enderror
                  
                  </div>
               
               </div>
               
               {{-- Confirmed by --}}
               <div class="form-group row">
               
                  <label for="confirmby" class="col-sm-3 col-form-label">CONFIRMED BY</label>
               
                  <div class="col-sm-6 ">
               
                     <textarea name="confirmby"
                           class="ckeditor10 form-control 
                           @error('confirmby') is-invalid @enderror">
                           {{ old('confirmby')}}
                     </textarea>
                     
                     @error('confirmby') <div class="text-muted">{{ $message }}</div> @enderror
                  
                  </div>
               
               </div>
                    
               <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
                
            </form>
      
         </div> <!-- /. card-body -->
   
      </div> <!-- /. card -->

   </div> <!-- /. col -->

</div>
@endsection

@push('after-script')
<script>
   $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor1'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor2'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor3'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor4'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor5'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor6'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor7'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor8'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor9'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor10'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor11'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
@endpush
