
<!-- Hero Section -->
<section id="hero">
    <h1><?= esc($company['name']) ?></h1>
    <p><?= esc($company['description']) ?></p>
</section>

<!-- Team Section -->
<section id="team">
    <h2>Meet Our Team</h2>
    <?php foreach ($team as $member): ?>
        <div class="team-member" style="text-align: center; margin-bottom: 20px;">
            <!-- Profile picture -->
            <img src="<?= base_url('uploads/team_pics/' . esc($member['image'])) ?>" alt="<?= esc($member['name']) ?>" style="width: 100px; height: 100px; border-radius: 50%;">
            
            <!-- Team member name, role, and email -->
            <h3><?= esc($member['name']) ?></h3>
            <p><?= esc($member['role']) ?></p>
            <p><?= esc($member['email']) ?></p>
        </div>
    <?php endforeach; ?>
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