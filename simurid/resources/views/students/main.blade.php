@extends('layouts.app')

@section('title', 'Data Murid')

@section('content')
<div class="container">

<h1>Data Murid</h1>
<a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Data</a>
{{-- table --}}
<table class="table">
 <thead>
   <tr>
     <th scope="col">No</th>
     <th scope="col">Nama</th>
     <th scope="col">Jurusan</th>
     <th scope="col">Kelas</th>
     <th scope="col">Action</th>
   </tr>
 </thead>
 @foreach ($data as $row)
 <tbody>
   <tr>
     <th scope="row">{{ $row->id }}</th>
     <td>{{ $row->nama }}</td>
     <td>{{ $row->jurusan }}</td>
     <td>{{ $row->kelas }}</td>
     <td>
      <div class="row">
        <div class="col">
          <a href="{{ route('students.edit', $row) }}" class="btn btn-success">Edit</a>
        </div>
        <div class="col">
          <form action="{{ route('students.destroy', $row) }}" method="post">
            @csrf
            @method('delete')
              <input type="submit" class="btn btn-danger" value="Delete">
          </form>
        </div>
      </div>

    </td>
   </tr>
 </tbody>  
 @endforeach
</table>
</div>
@endsection