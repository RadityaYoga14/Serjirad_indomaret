<?php
$pageTitle = 'Data Donasi';
$activePage = 'donations';
$pageStyles = ['donations-list.css'];
include '../../includes/header.php';
?>

<section class="table-panel">
    <div class="table-toolbar">
        <div>
            <h2 class="panel-title">Daftar donasi</h2>
            <p class="panel-copy">Catatan donasi pelanggan dari transaksi.</p>
        </div>
        <div class="action-row">
            <input class="form-control search-box" type="search" placeholder="Cari donasi">
            <a class="btn btn-primary" href="<?= app_url('pages/donations/add.php'); ?>">Catat donasi</a>
        </div>
    </div>

    <div class="table-wrap">
        <table class="table table-hover align-middle mb-0 data-table">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama pelanggan</th>
                    <th>Nominal</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DNS001</td>
                    <td>Pelanggan Umum</td>
                    <td>Rp 5.000</td>
                    <td>14 Oktober 2026</td>
                    <td><span class="badge badge-green">Masuk</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/donations/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>DNS002</td>
                    <td>Nina</td>
                    <td>Rp 10.000</td>
                    <td>14 Oktober 2026</td>
                    <td><span class="badge badge-green">Masuk</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/donations/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
