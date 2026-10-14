<?php
$pageTitle = 'Edit Kasir';
$activePage = 'cashiers';
$pageStyles = ['cashiers-edit.css'];
include '../../includes/header.php';
?>

<section class="form-panel">
    <div class="panel-header">
        <div>
            <h2 class="panel-title">Ubah data kasir</h2>
            <p class="panel-copy">Contoh form edit petugas kasir.</p>
        </div>
    </div>

    <form action="#" method="post">
        <div class="form-grid">
            <div class="form-field">
                <label for="cashier_id">ID kasir</label>
                <input class="form-control" id="cashier_id" name="cashier_id" type="text" value="KSR001">
            </div>
            <div class="form-field">
                <label for="cashier_name">Nama kasir</label>
                <input class="form-control" id="cashier_name" name="cashier_name" type="text" value="Andi Pratama">
            </div>
            <div class="form-field">
                <label for="shift">Shift</label>
                <select class="form-select" id="shift" name="shift">
                    <option selected>Pagi</option>
                    <option>Siang</option>
                    <option>Malam</option>
                </select>
            </div>
            <div class="form-field">
                <label for="phone">No. HP</label>
                <input class="form-control" id="phone" name="phone" type="tel" value="0812-3456-7890">
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan perubahan</button>
            <a class="btn btn-muted" href="<?= app_url('pages/cashiers/list.php'); ?>">Batal</a>
        </div>
    </form>
</section>

<?php include '../../includes/footer.php'; ?>
