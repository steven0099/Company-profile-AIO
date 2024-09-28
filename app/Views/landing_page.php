<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<?= $this->include('partials/header') ?>

<!-- Company Section -->
<section id="company" style="text-align: center;">
    <img src="<?= base_url('uploads/company_logo/' . esc($company['logo'])) ?>" alt="<?= esc($company['name']) ?> Logo" style="width: 150px; height: auto; display: block; margin: 0 auto;">
    <h1><?= esc($company['name']) ?></h1>
    <h4><?= esc($company['description']) ?></h4>
</section>

<!-- Hero Section with Slider -->
<section id="hero" style="position: relative; overflow: hidden; width: 100%;">
    <div class="slider" style="display: flex; width: 100%;">
        <?php foreach ($heroSlides as $slide): ?>
            <div class="slide" style="flex: 1; background-image: url('<?= base_url('uploads/hero_images/' . esc($slide['image'])) ?>'); background-size: contain; background-repeat: no-repeat; background-position: right; height: 400px;">
                <div class="hero-content">
                    <h1><?= esc($slide['title']) ?></h1>
                    <p><?= esc($slide['description']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Team Section -->
<section id="team">
    <h2>Meet Our Team</h2>
    <div class="team-container" style="display: flex; flex-wrap: wrap; justify-content: space-around;">
        <?php foreach ($team as $member): ?>
            <div class="team-member" style="text-align: center; margin: 10px; flex: 1 1 150px;">
                <!-- Profile picture -->
                <img src="<?= base_url('uploads/team_pics/' . esc($member['image'])) ?>" alt="<?= esc($member['name']) ?>" style="width: 100px; height: 100px; border-radius: 50%;">
                
                <!-- Team member name, role, and email -->
                <h3><?= esc($member['name']) ?></h3>
                <p><?= esc($member['role']) ?></p>
                <p><?= esc($member['email']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <h2>Contact Us</h2>
    <p>Email: <a href="mailto:<?= esc($contact['email']) ?>"><?= esc($contact['email']) ?></a></p>
    <p>Address: <?= esc($contact['address']) ?></p>
    
    <!-- Embed Google Map -->
    <div id="map" style="width: 100%; height: 400px;">
        <iframe 
            src="<?= esc($contact['map_location']) ?>" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"></iframe>
    </div>
</section>

<!-- Slider Script -->
<script>
    let slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Initial slide
    showSlide(currentSlide);

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
</script>