<?php
$pageTitle = 'Edit Produk';
$activePage = 'products';
$pageStyles = ['products-edit.css'];
include '../../includes/header.php';
?>

<section class="form-panel">
    <div class="panel-header">
        <div>
            <h2 class="panel-title">Ubah data produk</h2>
            <p class="panel-copy">Contoh tampilan edit untuk data produk yang sudah ada.</p>
        </div>
    </div>

    <form action="#" method="post">
        <div class="form-grid">
            <div class="form-field">
                <label for="product_code">Kode produk</label>
                <input class="form-control" id="product_code" name="product_code" type="text" value="PRD001">
            </div>
            <div class="form-field">
                <label for="product_name">Nama produk</label>
                <input class="form-control" id="product_name" name="product_name" type="text" value="Air Mineral 600 ml">
            </div>
            <div class="form-field">
                <label for="category">Kategori</label>
                <select class="form-select" id="category" name="category">
                    <option selected>Minuman</option>
                    <option>Makanan</option>
                    <option>Kebutuhan harian</option>
                </select>
            </div>
            <div class="form-field">
                <label for="price">Harga</label>
                <input class="form-control" id="price" name="price" type="number" value="4000">
            </div>
            <div class="form-field">
                <label for="stock">Stok</label>
                <input class="form-control" id="stock" name="stock" type="number" value="84">
            </div>
            <div class="form-field">
                <label for="status">Status</label>
                <select class="form-select" id="status" name="status">
                    <option selected>Aktif</option>
                    <option>Stok menipis</option>
                    <option>Tidak aktif</option>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan perubahan</button>
            <a class="btn btn-muted" href="<?= app_url('pages/products/list.php'); ?>">Batal</a>
        </div>
    </form>
</section>

<?php include '../../includes/footer.php'; ?>
