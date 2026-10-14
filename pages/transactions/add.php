<?php
$pageTitle = 'Tambah Transaksi';
$activePage = 'transactions';
$pageStyles = ['transactions-add.css'];
include '../../includes/header.php';
?>

<section class="form-panel">
    <div class="panel-header">
        <div>
            <h2 class="panel-title">Form transaksi</h2>
            <p class="panel-copy">Tampilan input transaksi sederhana untuk disambungkan ke proses kasir.</p>
        </div>
    </div>

    <form action="#" method="post">
        <div class="form-grid">
            <div class="form-field">
                <label for="invoice">No. nota</label>
                <input class="form-control" id="invoice" name="invoice" type="text" placeholder="TRX-003">
            </div>
            <div class="form-field">
                <label for="cashier">Kasir</label>
                <select class="form-select" id="cashier" name="cashier">
                    <option>Andi Pratama</option>
                    <option>Siti Aminah</option>
                </select>
            </div>
            <div class="form-field">
                <label for="product">Produk</label>
                <select class="form-select" id="product" name="product">
                    <option>Air Mineral 600 ml</option>
                    <option>Roti Cokelat</option>
                    <option>Susu Kotak</option>
                </select>
            </div>
            <div class="form-field">
                <label for="quantity">Jumlah</label>
                <input class="form-control" id="quantity" name="quantity" type="number" placeholder="1">
            </div>
            <div class="form-field">
                <label for="donation">Donasi</label>
                <input class="form-control" id="donation" name="donation" type="number" placeholder="0">
            </div>
            <div class="form-field">
                <label for="payment">Metode pembayaran</label>
                <select class="form-select" id="payment" name="payment">
                    <option>Tunai</option>
                    <option>QRIS</option>
                    <option>Kartu debit</option>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan transaksi</button>
            <a class="btn btn-muted" href="<?= app_url('pages/transactions/list.php'); ?>">Batal</a>
        </div>
    </form>
</section>

<?php include '../../includes/footer.php'; ?>
