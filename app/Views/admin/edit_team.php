<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

<h2>Edit Team Member</h2>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form method="post" action="<?= base_url('admin/updateTeam/' . $member['id']) ?>" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" value="<?= esc($member['name']) ?>" required>
    
    <label>Role:</label>
    <input type="text" name="role" value="<?= esc($member['role']) ?>" required>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?= esc($member['email']) ?>" required>

    <label>Profile Picture:</label>
    <input type="file" name="image">
    
    <button type="submit">Update Team Data</button>
</form>
