{{-- Add Mahasiswa --}}
<div class="modal fade" id="addMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewModalLabel">Add New Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Edit Mahasiswa -->
                <form action="{{route('mahasiswa.store')}}" method="POST" enctype="multipart/form-data" id="add-mahasiswa-form">
                    @csrf
                    <div class="form-group">
                        <label for="edit-nama">Nama</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama" value="">
                    </div>
                    <div class="form-group">
                        <label for="edit-nim">NIM</label>
                        <input type="text" class="form-control" id="edit-nim" name="nim" value="">
                    </div>
                    <div class="form-group p-2">
                        <label for="edit-jenis-kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="edit-jenis-kelamin" name="kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


