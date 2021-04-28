<!-- content -->
<div class="content mt-3">
    <div class="card">

        <div class="card-header">
            data master kategori
        </div>
        <div class="card-body">
            <a href="<?= base_url('kategori/tambah'); ?> " class="btn btn-warning mb-3" style="background-color: aqua;">tambah data</a>
            <table class="table table-bordered example" id="example">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama kategori</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                </tbody>
                <?php foreach ($list_kategori as $key => $val) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $val['nama_kategori'] ?></td>
                        <td>

                            <a href="<?= base_url('kategori/ubah/' . $val['id_kategori']) ?>" class="btn btn-success btn btn-small">Update</a>
                            <a href="<?= base_url('kategori/hapus/' . $val['id_kategori']) ?>" class="btn btn-danger btn-small" onclick="return confirm('Yakin Menghapus Data ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- end content -->