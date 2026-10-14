<?php
$pageTitle = 'Data Transaksi';
$activePage = 'transactions';
$pageStyles = ['transactions-list.css'];
include '../../includes/header.php';
?>

<section class="table-panel">
    <div class="table-toolbar">
        <div>
            <h2 class="panel-title">Daftar transaksi</h2>
            <p class="panel-copy">Riwayat transaksi yang nantinya bisa diambil dari database.</p>
        </div>
        <div class="action-row">
            <input class="form-control search-box" type="search" placeholder="Cari transaksi">
            <a class="btn btn-primary" href="<?= app_url('pages/transactions/add.php'); ?>">Buat transaksi</a>
        </div>
    </div>

    <div class="table-wrap">
        <table class="table table-hover align-middle mb-0 data-table">
            <thead>
                <tr>
                    <th>No. nota</th>
                    <th>Kasir</th>
                    <th>Total</th>
                    <th>Donasi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TRX-001</td>
                    <td>Andi Pratama</td>
                    <td>Rp 64.500</td>
                    <td>Rp 500</td>
                    <td>14 Oktober 2026</td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/transactions/transaction_details.php'); ?>">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>TRX-002</td>
                    <td>Siti Aminah</td>
                    <td>Rp 32.000</td>
                    <td>Rp 0</td>
                    <td>14 Oktober 2026</td>
                    <td class="action-row">
                        <a class="btn btn-muted" href="<?= app_url('pages/transactions/transaction_details.php'); ?>">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>
