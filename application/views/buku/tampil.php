<!-- content -->
<div class="content mt-3">
    <div class="card">

        <div class="card-header">
            data master buku
        </div>
        <div class="card-body">
            <a href="<?= base_url('buku/tambah'); ?> " class="btn btn-warning mb-3" style="background-color: aqua;">tambah data</a>
            <table class="table table-bordered example" id="example">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">kode Buku</th>
                        <th scope="col">penulis</th>
                        <th scope="col">penerbit</th>
                        <th scope="col">kategori</th>
                        <th scope="col">stok</th>
                        <th scope="col">aksi</th>

                    </tr>
                </thead>
                </tbody>
                <?php foreach ($list_buku as $key => $val) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $val['nama_buku'] ?></td>
                        <td><?= $val['kode_buku'] ?></>
                        <td><?= $val['nama_penulis'] ?></td>
                        <td><?= $val['nama_penerbit'] ?></td>
                        <td><?= $val['nama_kategori'] ?></td>
                        <td><?= $val['stok'] ?></td>
                        <td>
                            <a href="<?= base_url('buku/ubah/' . $val['id_buku']) ?>" class="btn btn-success btn btn-small">Update</a>
                            <a href="<?= base_url('buku/hapus/' . $val['id_buku']) ?>" class="btn btn-danger btn-small" onclick="return confirm('Yakin Menghapus Data ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- end content -->