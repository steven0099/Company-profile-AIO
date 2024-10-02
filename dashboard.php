<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

<div class="dashboard-container">
    <?= $this->include('partials/header') ?>
    <?= $this->include('partials/sidebar') ?>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 290px; padding: 20px; margin-top: 80px;">
    <h1>Welcome, <?= esc($adminName) ?>!</h1>
    <h3>Monthly Sales</h3>
    <div class="dashboard-filler">
        <img src="<?= base_url('assets/images/filler1.jpeg') ?>" alt="Filler Image 1">
        <img src="<?= base_url('assets/images/filler2.jpeg') ?>" alt="Filler Image 2">
        <img src="<?= base_url('assets/images/filler3.jpeg') ?>" alt="Filler Image 3">
    </div>
</div>
