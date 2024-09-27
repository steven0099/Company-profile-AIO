<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

<h2>Add Hero Slide</h2>

<form method="post" action="<?= base_url('admin/saveHeroSlide') ?>" enctype="multipart/form-data">
    <label>Title:</label>
    <input type="text" name="title" required>

    <label>Description:</label>
    <textarea name="description" required></textarea>

    <label>Image:</label>
    <input type="file" name="image" required>

    <label>Slide Order:</label>
    <input type="number" name="slide_order" required>

    <button type="submit">Save</button>
</form>
