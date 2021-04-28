<!-- content -->
<div class="content mt-3">
    <div class="card">

        <div class="card-header">
            data master penulis
        </div>
        <div class="card-body">
            <a href="<?= base_url('penulis/tambah'); ?> " class="btn btn-warning mb-3" style="background-color: aqua;">tambah data</a>
            <table class="table table-bordered example" id="example">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Penulis</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                </tbody>
                <?php foreach ($list_penulis as $key => $val) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $val['nama_penulis'] ?></td>
                        <td>

                            <a href="<?= base_url('penulis/ubah/' . $val['id_penulis']) ?>" class="btn btn-success btn btn-small">Update</a>
                            <a href="<?= base_url('penulis/hapus/' . $val['id_penulis']) ?>" class="btn btn-danger btn-small" onclick="return confirm('Yakin Menghapus Data ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- end content -->