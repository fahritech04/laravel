@extends('layouts.app')

@section('content')
<div class="container">
 {{-- Header --}}
 <h1 class="mt-3">Tambah Data</h1>

 {{-- form --}}
 <form action="insertdata" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control", name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Course</label>
    <input type="text" class="form-control" name="course">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section</label>
    <input type="text" class="form-control" name="section">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection