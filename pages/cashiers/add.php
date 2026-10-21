<?php
$pageTitle = 'Tambah Kasir';
$activePage = 'cashiers';
$pageStyles = ['cashiers-add.css'];
include '../../includes/header.php';
?>

<section class="form-panel">
    <div class="panel-header">
        <div>
            <h2 class="panel-title">Form kasir baru</h2>
            <p class="panel-copy">Data ini masih tampilan statis sampai proses PHP kamu sambungkan.</p>
        </div>
    </div>

    <form action="../../process/cashiers_process.php" method="post">
        <div class="form-grid">
            <input type="hidden" name="action" >
            <!-- <div class="form-field">
                <label for="cashier_id">ID kasir</label>
                <input class="form-control" id="cashier_id" name="cashier_id" type="text" placeholder="KSR003">
            </div> -->
            <div class="form-field">
                <label for="cashier_name">Nama kasir</label>
                <input class="form-control" id="cashier_name" name="cashier_name" type="text" placeholder="Nama lengkap">
            </div>
            <!-- <div class="form-field">
                <label for="shift">Shift</label>
                <select class="form-select" id="shift" name="shift">
                    <option>Pagi</option>
                    <option>Siang</option>
                    <option>Malam</option>
                </select>
            </div> -->
            <div class="form-field">
                <label for="phone">No. HP</label>
                <input class="form-control" id="phone" name="phone" type="tel" placeholder="08xx-xxxx-xxxx">
            </div>
            <div class="form-field full">
                <label for="address">Alamat</label>
                <textarea class="form-control" id="address" name="address" placeholder="Alamat kasir"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan kasir</button>
            <a class="btn btn-muted" href="<?= app_url('pages/cashiers/list.php'); ?>">Batal</a>
        </div>
    </form>
</section>

<?php include '../../includes/footer.php'; ?>
