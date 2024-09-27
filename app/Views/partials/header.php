<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <div class="header-container">
            <!-- Leftmost title -->
            <div class="header-title">
                <h1><?= esc($title ?? 'Welcome') ?></h1>
            </div>

            <!-- Rightmost navigation -->
            <nav class="header-nav">
                <ul>
                    <li><a href="<?= base_url('/') ?>">Home</a></li>

                    <?php if (session()->get('loggedIn')): ?>
                        <li><a href="<?= base_url('/admin') ?>">Admin Dashboard</a></li>
                        <li><a href="<?= base_url('/auth/logout') ?>">Logout</a></li>
                    <?php else: ?>
                        <li><a href="<?= base_url('/auth/login') ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>