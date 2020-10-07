@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="row align-items-center mb-4">
                            <div class="col">
                                <h2 class="page-title">Invoice</h2>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
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
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->date}}</td>
                                                <td>{{$item->insured_id}}</td>
                                                <td>
                                                    @if ($item->status == 'UNAPPROVED')
                                                        <span class="badge " style="background-color: #ffda83 !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                                                    @elseif($item->status == 'APPROVED')
                                                        <span class="badge " style="background-color: #69e4a6 !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">        
                                                    @elseif($item->status == 'APPROVED')
                                                        <span class="badge " style="background-color: #fabebe !important; color: #424242; border-radius: 0.9rem; padding: 1em 1em">
                                                    @else
                                                        <span>
                                                    @endif
                                                      {{$item->status}}
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button style="background-color: #e9e62c" !important; color: #ffffff;"  class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                            TINDAKAN
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                            {{-- @if ($item->status == 'UNAPPROVED')

                                                            <a href="{{ route('placing.status', $item->id) }}?status=APPROVED" class="dropdown-item">
    <i></i>                                                         APPROVED
                                                            </a>
                                                            <a href="{{ route('placing.status', $item->id) }}?status=REJECT" class="dropdown-item">
                                                                REJECT
                                                            </a> 
                                                            @endif --}}
                                                        <a class="dropdown-item " href="{{route('invoice.edit', $item->id)}}">
                                                                <i class="fe fe-edit">
                                                                    Edit   
                                                                </i>
                                                            </a>
                                                        <a class="dropdown-item " href="{{route('invoice.show', $item->id)}}">
                                                                <i class="fe fe-file-text">
                                                                    Cetak Asli
                                                                </i>
                                                            </a>
                                                        <a class="dropdown-item " href="{{route('invoice.showc', $item->id)}}">
                                                                <i class="fe fe-file-text">
                                                                    Cetak Copy
                                                                </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endpush