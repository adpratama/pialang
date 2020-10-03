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
                  <h2 class="page-title">Instruct Cover</h2>
                </div>
                {{-- <div class="col-auto">
                  <a href="{{route('quotation.create')}} " type="button" class="btn btn-secondary" >Tambah</a>          
                </div> --}}
            </div>
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tanggal</th>
                      {{-- <th>Insurance</th> --}}
                      <th>Insured</th>
                      <th>Insurance</th>
                      <th>Aksi</th>
                      {{-- <th>Instruct Cover</th> --}}
                      {{-- <th>Aksi</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($instructs as $instruct)
                      <tr>
                        <td>{{$instruct->id}} </td>
                        <td>{{$instruct->date}}</td>
                        <td>{{$instruct->insureds->name}}  </td>
                        <td>{{$instruct->insurance->name}}  </td>

                        {{-- <td>{!! substr($instruct->insured, 11, 50) !!}</td> --}}
                        {{-- <td>
                          @if($instruct->status == 'UNAPPROVED')
                            <span class="badge " style="background-color: #ffda83 !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                          @elseif($instruct->status == 'APPROVED')
                            <span class="badge " style="background-color: #69E4A6 !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                          @elseif($instruct->status == 'REJECTED')
                            <span class="badge " style="background-color: #fabebe !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                          @else 
                              <span>
                          @endif
                          {{$instruct->status}}
                        </td> --}}
                        {{-- <td>
                          @if($instruct->status == 'UNAPPROVED')
                              <a href="{{ route('placing.status', $instruct->id) }}?status=APPROVED" class="btn btn-success ">                                                     
                                  APPROVE
                              </a>
                              <a href="{{ route('placing.status', $instruct->id) }}?status=REJECTED" class="btn btn-danger ">                                                     
                                  REJECT
                              </a>
                              <a class="btn btn-light " href="{{route('placing.edit', $instruct->id)}} ">Edit</a>

                          @endif                          
                        </td> --}}
                        {{-- <td>
                          <a class="btn btn-light " href="{{route('instruct.show', $instruct->id)}} "><i class="fe fe-file-text"></i></a>
                          <a class="btn btn-light " href="{{route('placing.show', $instruct->id)}} ">Invoice</a>
                        </td> --}}
                        <td>
                          <div class="dropdwn">
                            <button style="background-color: #3294fe !important; color: #ffffff;"  class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <span class="text-muted sr-only">Action</span>
                              Tindakan
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                              @if($instruct->status == 'UNAPPROVED')
                              
                                <a href="{{ route('placing.status', $instruct->id) }}?status=APPROVED" class="dropdown-item">                                                     <i class="fe fe-check"></i>
                                    APPROVE
                                </a>
                                <a href="{{ route('placing.status', $instruct->id) }}?status=REJECTED" class="dropdown-item">                                                     <i class="fe fe-x"></i>
                                    REJECT
                                </a>
                                

                              @endif
                              {{-- <a class="dropdown-item " href="{{route('placing.edit', $instruct->id)}} "><i class="fe fe-edit"></i>Edit</a> --}}
                              <a class="dropdown-item " href="{{route('instruct.show', $instruct->id)}} "><i class="fe fe-file-text"></i>Cetak</a>
                              {{-- <a class="dropdown-item " href="{{route('placing.show', $instruct->id)}} ">Invoice</a> --}}
                            </div>
                          </div>  
                        </td>
                        {{-- <td>
                          <a href="{{route('instruct.create_ic', $instruct->id) }} "
                             class="btn btn-success btn-sm">Make IC</a>
                        </td> --}}
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