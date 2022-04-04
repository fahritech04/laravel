@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')
<div class="container mt-3">
 <h1>Tambah Data</h1>

{{-- form --}}
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-5">
    <div class="mb-3">
      <label for="" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">NISN</label>
      <input type="text" class="form-control" name="nisn">
    </div>
    <div class="mb-3">
     <label for="" class="form-label">Jenis Kelamin</label>
     <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
      <option selected></option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat">
    </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection