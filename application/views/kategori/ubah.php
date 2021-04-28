<!-- content -->
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Tambah Data Master kategori
        </div>
        <div class="card-body">

            <a href="<?= base_url('kategori') ?>" class="btn btn-warning mb-3">Tampil Data</a>

            <form method="POST" action="<?= base_url('kategori/update/' . $kategori->id_kategori) ?>">
                <div class="form-group">
                    <label for="kategori">Nama Penerbit</label>
                    <input type="text" name="nama_kategori" class="form-control" id="kategori" autocomplete="off" value="<?= $kategori->nama_kategori ?>" required>
                    <!-- <small id="kategoriHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

                </div>
                <button type="submit" class="btn btn-success">Ubah</button>
            </form>

        </div>
    </div>
</div>
<!-- end content -->