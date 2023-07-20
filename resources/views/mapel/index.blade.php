@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data Mata Pelajaran </h2>
<a href="{{ url('mapel/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID</th>
        <th>ID GURU</th>
        <th>KODE</th>
        <th>NAMA PELAJARAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->mapel_id }}</td>
        <td>{{ $row->mapel_id_guru }}</td>
        <td>{{ $row->mapel_kode }}</td>
        <td>{{ $row->mapel_nama }}</td>
        <td><a href="{{ url('mapel/edit/' .$row->mapel_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('mapel/' .$row->mapel_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection