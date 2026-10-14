<?php
$pageTitle = 'Data Kasir';
$activePage = 'cashiers';
$pageStyles = ['cashiers-list.css'];
include '../../includes/header.php';
?>

<section class="table-panel">
    <div class="table-toolbar">
        <div>
            <h2 class="panel-title">Daftar kasir</h2>
            <p class="panel-copy">Tampilan pengelolaan petugas kasir.</p>
        </div>
        <div class="action-row">
            <input class="form-control search-box" type="search" placeholder="Cari kasir">
            <a class="btn btn-primary" href="<?= app_url('pages/cashiers/add.php'); ?>">Tambah kasir</a>
        </div>
    </div>

    <div class="table-wrap">
        <table class="table table-hover align-middle mb-0 data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Shift</th>
                    <th>No. HP</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>KSR001</td>
                    <td>Andi Pratama</td>
                    <td>Pagi</td>
                    <td>0812-3456-7890</td>
                    <td><span class="badge badge-green">Aktif</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/cashiers/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>KSR002</td>
                    <td>Siti Aminah</td>
                    <td>Siang</td>
                    <td>0813-2222-1100</td>
                    <td><span class="badge badge-green">Aktif</span></td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/cashiers/edit.php'); ?>">Edit</a>
                        <a class="btn btn-danger" href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
