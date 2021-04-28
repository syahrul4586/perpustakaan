<!-- content -->
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Tambah Data Master Penulis
        </div>
        <div class="card-body">

            <a href="<?= base_url('penulis') ?>" class="btn btn-warning mb-3">Tampil Data</a>

            <form method="POST" action="<?= base_url('penulis/update/' . $penulis->id_penulis) ?>">
                <div class="form-group">
                    <label for="penulis">Nama Penerbit</label>
                    <input type="text" name="nama_penulis" class="form-control" id="penulis" autocomplete="off" value="<?= $penulis->nama_penulis ?>" required>
                    <!-- <small id="penulisHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

                </div>
                <button type="submit" class="btn btn-success">Ubah</button>
            </form>

        </div>
    </div>
</div>
<!-- end content -->