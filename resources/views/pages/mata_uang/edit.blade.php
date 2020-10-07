@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Edit Mata Uang</strong>
          <strong class="float-right">{{$item->id}}</strong>
        </div>
        <div class="card-body">
          <form action="{{ route('mata_uang.update', $item->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input_kode">Input Kode</label>
                  <input type="text" class="form-control" name="input_kode" id="input_kode" value="{{old('input_kode') ? old('input_kode'): $item->input_kode }} @error('input_kode') is-invalid @enderror ">
                  @error('input_kode')
                      <div class="text-muted">{{ $message}} </div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="mata_uang">Deskripsi</label>
                  <input type="text" class="form-control" name="mata_uang" id="mata_uang" value="{{old('mata_uang') ? old('mata_uang'): $item->mata_uang }} @error('mata_uang') is-invalid @enderror ">
                  @error('mata_uang')
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