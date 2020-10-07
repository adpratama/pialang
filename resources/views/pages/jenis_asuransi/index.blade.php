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
                  <h2 class="mb-2 page-title">Jenis Asuransi</h2>
                </div>
                <div class="col-auto">
                  <a href="{{route('jenis_asuransi.create')}}" type="button" class="btn btn-secondary" >Tambah</a>          
                </div>
              </div>
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th><strong>No</strong></th>
                      <th><strong>Kode</strong></th>
                      <th><strong>Deskripsi</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($items as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->input_kode}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>
                          
                          {{-- <div class="dropdown-menu dropdown-menu-right"> --}}
                            <a class="btn mb-2 btn-light" href="{{route('jenis_asuransi.edit', $item->id)}} ">Edit</a>
                            {{-- <a class="dropdown-item" href="#">Remove</a>
                            <form action="{{ route('clients.destroy', $item->id) }}" method="post">
                              @csrf
                              @method('delete')
                             <button class="delete-confirm" data-name="{{ $item->name }}" type="submit">Delete</button>
                            </form>  --}}
                            {{-- <form action="{{ route('clients.destroy', $item->id)}}"" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i>
                              </button>
                          </form> --}}
                          {{-- </div> --}}
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="8" class="text-center p-4">
                            Data tidak tersedia
                        </td>
                      </tr>
                      @endforelse
                    
                    {{-- @empty
                    
                    @endforelse --}}
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
