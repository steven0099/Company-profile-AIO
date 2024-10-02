<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar', ['company' => $company]) ?>

<div class="company-form" style="margin-left: 290px; padding: 20px; margin-top: 80px;">
<form action="/admin/updateCompany" method="post" enctype="multipart/form-data">
    <label for="name">Company Name:</label>
    <input type="text" name="name" value="<?= esc($company['name']) ?>">

    <label for="description">Description:</label>
    <textarea name="description"><?= esc($company['description']) ?></textarea>

    <label for="logo">Company Logo:</label>
    <input type="file" name="logo" id="logo">

    <button type="submit">Save Changes</button>
</form>
</div>
