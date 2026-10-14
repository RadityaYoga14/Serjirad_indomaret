<?php
$pageTitle = $pageTitle ?? 'Dashboard';
$activePage = $activePage ?? 'dashboard';
$pageStyles = $pageStyles ?? [];

if (!function_exists('app_url')) {
    function app_url($path = '')
    {
        $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
        $base = '';

        foreach (['/pages/', '/process/'] as $marker) {
            $position = strpos($script, $marker);
            if ($position !== false) {
                $base = substr($script, 0, $position);
                break;
            }
        }

        if ($base === '') {
            $base = rtrim(str_replace('\\', '/', dirname($script)), '/');
        }

        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }
}

$navItems = [
    ['key' => 'dashboard', 'label' => 'Dashboard', 'icon' => 'grid', 'href' => app_url('pages/dashboard.php')],
    ['key' => 'products', 'label' => 'Produk', 'icon' => 'box', 'href' => app_url('pages/products/list.php')],
    ['key' => 'cashiers', 'label' => 'Kasir', 'icon' => 'user', 'href' => app_url('pages/cashiers/list.php')],
    ['key' => 'donations', 'label' => 'Donasi', 'icon' => 'heart', 'href' => app_url('pages/donations/list.php')],
    ['key' => 'transactions', 'label' => 'Transaksi', 'icon' => 'receipt', 'href' => app_url('pages/transactions/list.php')],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle); ?> - Indomaret RPL 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= app_url('assets/css/global.css'); ?>">
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?= app_url('assets/css/' . ltrim($style, '/')); ?>">
    <?php endforeach; ?>
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar">
            <div class="brand">
                <div class="brand-mark">I</div>
                <div>
                    <p class="brand-name">Indomaret RPL 4</p>
                    <p class="brand-subtitle">Sistem kasir sekolah</p>
                </div>
            </div>

            <nav class="nav-menu" aria-label="Menu utama">
                <?php foreach ($navItems as $item): ?>
                    <a class="nav-link <?= $activePage === $item['key'] ? 'active' : ''; ?>" href="<?= htmlspecialchars($item['href']); ?>">
                        <span class="nav-icon" aria-hidden="true">
                            <?php if ($item['icon'] === 'grid'): ?>
                                <svg width="19" height="19" viewBox="0 0 24 24" fill="none"><path d="M4 4h7v7H4V4Zm9 0h7v7h-7V4ZM4 13h7v7H4v-7Zm9 0h7v7h-7v-7Z" stroke="currentColor" stroke-width="2"/></svg>
                            <?php elseif ($item['icon'] === 'box'): ?>
                                <svg width="19" height="19" viewBox="0 0 24 24" fill="none"><path d="m4 7 8-4 8 4v10l-8 4-8-4V7Z" stroke="currentColor" stroke-width="2"/><path d="m4 7 8 4 8-4M12 11v10" stroke="currentColor" stroke-width="2"/></svg>
                            <?php elseif ($item['icon'] === 'user'): ?>
                                <svg width="19" height="19" viewBox="0 0 24 24" fill="none"><path d="M20 21a8 8 0 0 0-16 0M12 13a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" stroke="currentColor" stroke-width="2"/></svg>
                            <?php elseif ($item['icon'] === 'heart'): ?>
                                <svg width="19" height="19" viewBox="0 0 24 24" fill="none"><path d="M20.8 5.8c-1.7-2.1-4.9-2.4-6.8-.5L12 7.2l-2-1.9C8.1 3.4 4.9 3.7 3.2 5.8c-1.8 2.2-1.5 5.4.6 7.4L12 21l8.2-7.8c2.1-2 2.4-5.2.6-7.4Z" stroke="currentColor" stroke-width="2"/></svg>
                            <?php else: ?>
                                <svg width="19" height="19" viewBox="0 0 24 24" fill="none"><path d="M6 3h12v18l-3-2-3 2-3-2-3 2V3Z" stroke="currentColor" stroke-width="2"/><path d="M9 8h6M9 12h6M9 16h3" stroke="currentColor" stroke-width="2"/></svg>
                            <?php endif; ?>
                        </span>
                        <span><?= htmlspecialchars($item['label']); ?></span>
                    </a>
                <?php endforeach; ?>
            </nav>

            <div class="sidebar-note">
                Desain sudah disiapkan sebagai tampilan statis. Logika database bisa kamu sambungkan pelan-pelan setelah UI-nya beres.
            </div>
        </aside>

        <main class="main-panel">
            <header class="topbar">
                <div>
                    <p class="page-kicker">Panel administrasi</p>
                    <h1 class="page-title"><?= htmlspecialchars($pageTitle); ?></h1>
                </div>
                <div class="topbar-status">
                    <span class="status-dot"></span>
                    Siap dipakai
                </div>
            </header>
