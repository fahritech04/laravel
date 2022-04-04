@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')
<div class="container">
 <h1>Tambah Data</h1>

{{-- Form --}}
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 <div class="col-5">
  <div class="mb-3">
    <label for="" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Jurusan</label>
    <input type="text" class="form-control" name="jurusan">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Kelas</label>
    <input type="text" class="form-control" name="kelas">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection