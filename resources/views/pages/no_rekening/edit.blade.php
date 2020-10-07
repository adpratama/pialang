@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Edit No Rekening</strong>
          <strong class="float-right">{{$item->id}}</strong>
        </div>
        <div class="card-body">
          <form action="{{ route('no_rekening.update', $item->id) }}" method="POST">
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
                  <label for="nama_bank">Nama Bank</label>
                  <input type="text" class="form-control" name="nama_bank" id="nama_bank" value="{{old('nama_bank') ? old('nama_bank'): $item->nama_bank}} @error('nama_bank') is-invalid @enderror ">
                  @error('nama_bank')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="no_rekening">No Rekening</label>
                  <input type="number" class="form-control" name="no_rekening" id="no_rekening" value="{{old('no_rekening') ? old('no_rekening')  : $item->no_rekening }}">
                  @error('no_rekening')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="atas_nama">Atas Nama</label>
                  <input type="text" class="form-control" name="atas_nama" id="atas_nama" value="{{old('atas_nama') ? old('atas_nama'): $item->atas_nama}} @error('atas_nama') is-invalid @enderror ">
                  @error('atas_nama')
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