<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<?= $this->include('partials/header') ?>

<h2>Hero Slides</h2>

<div style="text-align: right; margin-bottom: 20px;">
    <a href="/admin/addHeroSlide" class="btn btn-primary">Add New Slide</a>
</div>

<table class="hero-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($heroSlides as $slide): ?>
        <tr>
            <td><?= esc($slide['title']) ?></td>
            <td><?= esc($slide['description']) ?></td>
            <td><img src="<?= base_url('uploads/hero_images/' . esc($slide['image'])) ?>" width="100"></td>
            <td>
                <a href="/admin/editHeroSlide/<?= $slide['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="/admin/deleteHeroSlide/<?= $slide['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
