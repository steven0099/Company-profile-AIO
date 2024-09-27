<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

<h2>Add Team Member</h2>
<form method="post" action="<?= base_url('/admin/saveTeam') ?>" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name">
    
    <label for="role">Role:</label>
    <input type="text" name="role">
    
    <label for="email">Email:</label>
    <input type="text" name="email">

    <label>Profile Picture:</label>
    <input type="file" name="image">
    
    <button type="submit">Add Member</button>
</form>
