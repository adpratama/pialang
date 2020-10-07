@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Edit Authorize Sign</strong>
          <strong class="float-right">{{$item->id}}</strong>
        </div>
        <div class="card-body">
          <form action="{{ route('authorize_sign.update', $item->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <div class="form-group col-md-6">
                  <label for="input_kode">Input Kode</label>
                  <input type="text" class="form-control" name="input_kode" id="input_kode" value="{{old('input_kode') ? old('input_kode'): $item->input_kode}} @error('input_kode') is-invalid @enderror ">
                  @error('input_kode')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama') ? old('nama'): $item->nama}} @error('nama') is-invalid @enderror ">
                  @error('nama')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{old('jabatan') ? old('jabatan'): $item->jabatan}} @error('jabatan') is-invalid @enderror ">
                  @error('jabatan')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
              </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
@endsection