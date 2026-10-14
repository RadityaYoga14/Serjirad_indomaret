<?php
$pageTitle = 'Detail Transaksi';
$activePage = 'transactions';
$pageStyles = ['transactions-detail.css'];
include '../../includes/header.php';
?>

<div class="content-stack">
    <section class="section-panel">
        <div class="panel-header">
            <div>
                <h2 class="panel-title">Nota TRX-001</h2>
                <p class="panel-copy">Kasir: Andi Pratama, 14 Oktober 2026 pukul 08.10.</p>
            </div>
            <a class="btn btn-muted" href="<?= app_url('pages/transactions/list.php'); ?>">Kembali</a>
        </div>

        <div class="metric-grid">
            <article class="metric-card">
                <div class="metric-icon">T</div>
                <div><strong>Rp 64.500</strong><span>Total belanja</span></div>
            </article>
            <article class="metric-card">
                <div class="metric-icon">D</div>
                <div><strong>Rp 500</strong><span>Donasi</span></div>
            </article>
            <article class="metric-card">
                <div class="metric-icon">P</div>
                <div><strong>Tunai</strong><span>Pembayaran</span></div>
            </article>
            <article class="metric-card">
                <div class="metric-icon">S</div>
                <div><strong>Selesai</strong><span>Status</span></div>
            </article>
        </div>
    </section>

    <section class="table-panel">
        <div class="table-toolbar">
            <div>
                <h2 class="panel-title">Item pembelian</h2>
                <p class="panel-copy">Contoh rincian produk dalam transaksi.</p>
            </div>
        </div>
        <div class="table-wrap">
            <table class="table table-hover align-middle mb-0 data-table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Air Mineral 600 ml</td>
                        <td>Rp 4.000</td>
                        <td>3</td>
                        <td>Rp 12.000</td>
                    </tr>
                    <tr>
                        <td>Roti Cokelat</td>
                        <td>Rp 7.500</td>
                        <td>2</td>
                        <td>Rp 15.000</td>
                    </tr>
                    <tr>
                        <td>Susu Kotak</td>
                        <td>Rp 6.000</td>
                        <td>6</td>
                        <td>Rp 36.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php include '../../includes/footer.php'; ?>
