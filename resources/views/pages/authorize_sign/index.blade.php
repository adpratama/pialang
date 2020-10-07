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
                  <h2 class="mb-2 page-title">Authorize Sign</h2>
                </div>
                <div class="col-auto">
                  <a href="{{route('authorize_sign.create')}}" type="button" class="btn btn-secondary" >Tambah</a>          
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
                      <th><strong>Nama</strong></th>
                      <th><strong>Jabatan</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($items as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->input_kode}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jabatan}}</td>
                        <td>
                            <a class="btn mb-2 btn-light" href="{{route('authorize_sign.edit', $item->id)}}">Edit</a>
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
