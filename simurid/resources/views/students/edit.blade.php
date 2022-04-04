@extends('layouts.app')

@section('title', 'Update Data')

@section('content')
<div class="container">
 <h1>Tambah Data</h1>

{{-- Form --}}
<form action="/students/{{ $data->id }}" method="post">
 @method('put')
 @csrf
 <div class="col-5">
  <div class="mb-3">
    <label for="" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Jurusan</label>
    <input type="text" class="form-control" name="jurusan" value="{{ $data->jurusan }}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Kelas</label>
    <input type="text" class="form-control" name="kelas" value="{{ $data->kelas }}">
  </div>
  <div class="mb-3">
    <a href="{{ route('students.index') }}" class="btn btn-primary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>

</div>
</form>
</div>
@endsection