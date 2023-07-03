@extends('layout.layout')
@section('title', 'CRUD')
@extends('layout.navbar')
@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Mahasiswa</h1>
    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMahasiswa">
        Add Mahasiswa
    </button>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelamin</th>
            <th>Action</th>
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
                        <a href="{{ route('mahasiswa.edit', $row->id) }}"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMahasiswa{{ $row->id }}">
                            Edit
                        </a>
                        {{-- Edit Mahasiswa --}}
                        <div class="modal" tabindex="-1" id="editMahasiswa{{ $row->id }}" tabindex="-1" aria-labelledby="editMahasiswa{{ $row->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="{{ route('mahasiswa.update', $row->id) }}"
                                            method="POST" enctype="multipart/form-data" id="add-mahasiswa-form">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="edit-nama">Nama</label>
                                                <input type="text" class="form-control" id="edit-nama" name="nama"
                                                    value="{{ $row->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-nim">NIM</label>
                                                <input type="text" class="form-control" id="edit-nim" name="nim"
                                                    value="{{ $row->nim }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-jenis-kelamin">Jenis Kelamin</label>
                                                <select class="form-control" id="edit-jenis-kelamin" name="kelamin">
                                                    <option value="Laki-laki"
                                                        {{ $row->kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                                        Laki-laki</option>
                                                    <option value="Perempuan"
                                                        {{ $row->kelamin === 'Perempuan' ? 'selected' : '' }}>
                                                        Perempuan</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('mahasiswa.destroy', $row->id) }}"
                            method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah anda ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else

        @endif
    </tbody>
</table>
@endsection