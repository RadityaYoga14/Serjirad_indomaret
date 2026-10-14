<?php
$pageTitle = 'Data Produk';
$activePage = 'products';
$pageStyles = ['products-list.css'];
include '../../includes/header.php';
?>

<section class="table-panel">
    <div class="table-toolbar">
        <div>
            <h2 class="panel-title">Daftar produk</h2>
            <p class="panel-copy">Contoh tabel produk untuk tampilan awal.</p>
        </div>
        <div class="action-row">
            <input class="form-control search-box" type="search" placeholder="Cari produk">
            <a class="btn btn-primary" href="<?= app_url('pages/products/add.php'); ?>">Tambah produk</a>
        </div>
    </div>

    <div class="table-wrap">
        <table class="table table-hover align-middle mb-0 data-table">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PRD001</td>
                    <td>Air Mineral 600 ml</td>
                    <td>Minuman</td>
                    <td>Rp 4.000</td>
                    <td><span class="badge badge-green">84 pcs</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/products/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>PRD002</td>
                    <td>Roti Cokelat</td>
                    <td>Makanan</td>
                    <td>Rp 7.500</td>
                    <td><span class="badge">31 pcs</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/products/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>PRD003</td>
                    <td>Susu Kotak</td>
                    <td>Minuman</td>
                    <td>Rp 6.000</td>
                    <td><span class="badge badge-red">8 pcs</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/products/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
