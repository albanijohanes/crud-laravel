@extends('layout.layout')
@section('title', 'Selamat datang')
@extends('layout.nb')
@section('content')
<div class="container text-center p-5">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @if($mahasiswa->count() > 0)
                @foreach($mahasiswa as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->nim }}</td>
                        <td>{{ $row->kelamin }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            @else

            @endif
        </tbody>
    </table>
</div>
@endsection