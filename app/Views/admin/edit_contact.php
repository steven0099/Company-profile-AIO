<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

<h2>Edit Company Contact Info</h2>
<form action="/admin/updateContact" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= esc($contact['email']) ?>">

    <label for="address">Address:</label>
    <textarea name="address"><?= esc($contact['address']) ?></textarea>

    <label for="map_location">Map Location (Embed link):</label>
    <input type="text" name="map_location" value="<?= esc($contact['map_location']) ?>">

    <button type="submit">Save Changes</button>
</form>
