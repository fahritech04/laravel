@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
<div class="container mt-3">
 <h1>Data Siswa</h1>

 <a href="{{ route('students.create') }}" class="btn btn-primary mb-3 mt-3 float-end">Tambah Data +</a>
 {{-- table --}}

 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NISN</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($data as $row)
    <tr>
     <th scope="row">{{ $row->id }}</th>
     <td>{{ $row->nama }}</td>
     <td>{{ $row->nisn }}</td>
     <td>{{ $row->jenis_kelamin }}</td>
     <td>{{ $row->alamat }}</td>
    </tr>
    @endforeach
   </tbody>

</table>
</div>

@endsection