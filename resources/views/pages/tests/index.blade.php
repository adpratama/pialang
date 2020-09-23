@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Tambah Data Test</strong>
          {{-- <strong class="float-right">{{$item}}</strong> --}}
        </div>
        <div class="card-body">
          <form action="{{ route('tests.store') }}" method="POST">
            @csrf     
                
           
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}} @error('name') is-invalid @enderror ">
                @error('name')
                    <div class="text-muted">{{ $message}} </div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div>
@endsection