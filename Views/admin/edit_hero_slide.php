<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<!-- app/Views/admin/edit_hero_slide.php -->
<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar', ['company' => $company]) ?>

<div class="edithero-content" style="margin-left: 290px; padding: 20px; margin-top: 80px;">

    <form action="/admin/updateHeroSlide/<?= $heroSlide['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?= esc($heroSlide['title']) ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required><?= esc($heroSlide['description']) ?></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <?php if ($heroSlide['image']): ?>
                <p>Current Image:</p>
                <img src="<?= base_url('uploads/hero_images/' . esc($heroSlide['image'])) ?>" width="150">
            <?php endif; ?>
        </div>

        <!-- Hidden input for slide order to keep it unchanged -->
        <input type="hidden" name="slide_order" value="<?= esc($heroSlide['slide_order']) ?>">

        <button type="submit" class="btn btn-primary">Update Slide</button>
    </form>
</div>
