<?php
$pageTitle = 'Tambah Produk';
$activePage = 'products';
$pageStyles = ['products-add.css'];
include '../../includes/header.php';
?>

<section class="form-panel">
    <div class="panel-header">
        <div>
            <h2 class="panel-title">Form produk baru</h2>
            <p class="panel-copy">Isi data tampilan dulu. Proses simpan bisa kamu sambungkan nanti.</p>
        </div>
    </div>

    <form action="#" method="post">
        <div class="form-grid">
            <div class="form-field">
                <label for="product_code">Kode produk</label>
                <input class="form-control" id="product_code" name="product_code" type="text" placeholder="PRD004">
            </div>
            <div class="form-field">
                <label for="product_name">Nama produk</label>
                <input class="form-control" id="product_name" name="product_name" type="text" placeholder="Nama produk">
            </div>
            <div class="form-field">
                <label for="category">Kategori</label>
                <select class="form-select" id="category" name="category">
                    <option>Minuman</option>
                    <option>Makanan</option>
                    <option>Kebutuhan harian</option>
                </select>
            </div>
            <div class="form-field">
                <label for="price">Harga</label>
                <input class="form-control" id="price" name="price" type="number" placeholder="0">
            </div>
            <div class="form-field">
                <label for="stock">Stok</label>
                <input class="form-control" id="stock" name="stock" type="number" placeholder="0">
            </div>
            <div class="form-field">
                <label for="status">Status</label>
                <select class="form-select" id="status" name="status">
                    <option>Aktif</option>
                    <option>Stok menipis</option>
                    <option>Tidak aktif</option>
                </select>
            </div>
            <div class="form-field full">
                <label for="description">Catatan</label>
                <textarea class="form-control" id="description" name="description" placeholder="Catatan produk"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan produk</button>
            <a class="btn btn-muted" href="<?= app_url('pages/products/list.php'); ?>">Batal</a>
        </div>
    </form>
</section>

<?php include '../../includes/footer.php'; ?>
