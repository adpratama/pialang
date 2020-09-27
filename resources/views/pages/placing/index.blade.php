@extends('layouts.default')

@section('content')

<div class="container-fluid">
  
  <div class="row justify-content-center">
  
    <div class="col-12">        
  
      <div class="row my-4">
          <!-- Small table -->
          {{-- <button type="button" class="btn mb-2 btn-light">Light</button> --}}
  
        <div class="col-md-12">
        
          <div class="row align-items-center mb-4">
        
            <div class="col">
        
              <h2 class="page-title">Placing Slip</h2>
        
            </div>
        
            <div class="col-auto">
        
              <a href="{{route('placing.create')}} " type="button" class="btn btn-secondary" >
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
                    <th>Cetak</th>
                    
                  </tr>
                
                </thead>
                
                <tbody>
                
                  @forelse ($items as $item)
                
                  <tr>
                
                    <td>{{$item->id}} </td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->insurance->name}}</td>
                    <td>{!! substr($item->insured, 11, 50) !!}</td>
                    <td>
                          
                      @if($item->status == 'UNAPPROVED')
                      
                        <span class="badge badge-warning">
                      
                      @elseif($item->status == 'APPROVED')
                        
                        <span class="badge badge-success">
                        
                      @elseif($item->status == 'REJECTED')
                      
                        <span class="badge badge-danger">
                        
                      @else 
                       
                        <span>
                        
                      @endif
                          {{$item->status}}
                       
                    </td>
                    <td class="float-right">
                    
                      @if($item->status == 'UNAPPROVED')
                    
                        <a href="{{ route('placing.status', $item->id) }}?status=APPROVED" 
                          class="btn btn-success ">
                            APPROVE
                        </a>
                        
                        <a href="{{ route('placing.status', $item->id) }}?status=REJECTED" 
                          class="btn btn-danger">                                                     
                            REJECT
                        </a>
                        
                        <a class="btn btn-light " 
                          href="{{route('placing.edit', $item->id)}} ">
                            Edit
                        </a>

                      @endif
                      
                      
                        
                      @if ($item->status == 'APPROVED')
                      
                        <a href="{{route('quotation.qs', $item->id)}} " 
                          class="btn btn-success ">
                            Create Quotation
                        </a>
                              
                      @endif
                    </td>

                    <td>
                      <a class="btn btn-light " 
                        href="{{route('placing.show', $item->id)}} ">
                          <i class="fe fe-file-text"></i>
                          {{-- Cetak --}}
                      </a>
                    </td>
                  </tr>
                  
                  @empty
                  
                  <tr>
                  
                    <td colspan="9" class="text-center p-4">
                  
                      Data tidak tersedia
                  
                    </td>
                  
                  </tr>
                  
                  @endforelse
             
                </tbody>
             
              </table>
            
            </div>

          </div>

        </div> <!-- simple table -->

      </div> <!-- end section -->

    </div> <!-- .col-12 -->

  </div> <!-- .row -->

</div>
@endsection

@push('after-script')
<script src='{{asset('js/jquery.dataTables.min.js')}}'></script>
<script src='{{asset('js/dataTables.bootstrap4.min.js')}}'></script>
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
@endpush