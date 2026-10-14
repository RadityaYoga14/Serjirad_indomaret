<?php
$pageTitle = 'Edit Donasi';
$activePage = 'donations';
$pageStyles = ['donations-edit.css'];
include '../../includes/header.php';
?>

<section class="form-panel">
    <div class="panel-header">
        <div>
            <h2 class="panel-title">Ubah data donasi</h2>
            <p class="panel-copy">Contoh form edit donasi pelanggan.</p>
        </div>
    </div>

    <form action="#" method="post">
        <div class="form-grid">
            <div class="form-field">
                <label for="donation_code">Kode donasi</label>
                <input class="form-control" id="donation_code" name="donation_code" type="text" value="DNS001">
            </div>
            <div class="form-field">
                <label for="customer_name">Nama pelanggan</label>
                <input class="form-control" id="customer_name" name="customer_name" type="text" value="Pelanggan Umum">
            </div>
            <div class="form-field">
                <label for="amount">Nominal</label>
                <input class="form-control" id="amount" name="amount" type="number" value="5000">
            </div>
            <div class="form-field">
                <label for="date">Tanggal</label>
                <input class="form-control" id="date" name="date" type="date" value="2026-10-14">
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan perubahan</button>
            <a class="btn btn-muted" href="<?= app_url('pages/donations/list.php'); ?>">Batal</a>
        </div>
    </form>
</section>

<?php include '../../includes/footer.php'; ?>
