<?php
$pageTitle = 'Dashboard';
$activePage = 'dashboard';
$pageStyles = ['dashboard.css'];
include '../includes/header.php';
?>

<div class="content-stack">
    <section class="section-panel">
        <div class="panel-header">
            <div>
                <h2 class="panel-title">Ringkasan toko hari ini</h2>
                <p class="panel-copy">Tampilan awal untu    k memantau produk, kasir, donasi, dan transaksi.</p>
            </div>
            <div class="action-row">
                <a class="btn btn-primary" href="<?= app_url('pages/transactions/add.php'); ?>">Buat transaksi</a>
                <a class="btn btn-muted" href="<?= app_url('pages/products/list.php'); ?>">Lihat produk</a>
            </div>
        </div>

        <div class="metric-grid">
            <article class="metric-card">
                <!-- <div class="metric-icon">Rp</div> -->
                <div><strong>1,25 jt</strong><span>Penjualan</span></div>
            </article>
            <article class="metric-card">
                <!-- <div class="metric-icon">#</div> -->
                <div><strong>48</strong><span>Transaksi</span></div>
            </article>
            <article class="metric-card">
                <!-- <div class="metric-icon">B</div> -->
                <div><strong>126</strong><span>Produk aktif</span></div>
            </article>
            <article class="metric-card">
                <!-- <div class="metric-icon">D</div> -->
                <div><strong>82 rb</strong><span>Donasi terkumpul</span></div>
            </article>
        </div>
    </section>

    <div class="quick-grid">
        <section class="section-panel">
            <div class="panel-header">
                <div>
                    <h2 class="panel-title">Aktivitas terbaru</h2>
                    <p class="panel-copy">Contoh tampilan data sebelum backend disambungkan.</p>
                </div>
            </div>
            <div class="table-wrap">
                <table class="table table-hover align-middle mb-0 data-table">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Kegiatan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08.10</td>
                            <td>Transaksi oleh Kasir A</td>
                            <td><span class="badge badge-green">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>08.24</td>
                            <td>Stok minuman diperbarui</td>
                            <td><span class="badge">Dicatat</span></td>
                        </tr>
                        <tr>
                            <td>08.41</td>
                            <td>Donasi pelanggan masuk</td>
                            <td><span class="badge badge-green">Masuk</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="section-panel">
            <div class="panel-header">
                <div>
                    <h2 class="panel-title">Akses cepat</h2>
                    <p class="panel-copy">Pindah ke halaman yang sering dipakai.</p>
                </div>
            </div>
            <div class="action-row">
                <a class="btn btn-primary" href="<?= app_url('pages/products/add.php'); ?>">Tambah produk</a>
                <a class="btn btn-muted" href="<?= app_url('pages/cashiers/add.php'); ?>">Tambah kasir</a>
                <a class="btn btn-muted" href="<?= app_url('pages/donations/add.php'); ?>">Catat donasi</a>
            </div>
        </section>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
