<section class="page page-home">
    <h1><?= htmlspecialchars($title) ?></h1>

    <div class="home-photo">
        <div class="home-photo__placeholder">Photo</div>
    </div>

    <p class="home-description"><?= htmlspecialchars($description) ?></p>
    <p class="home-bio"><?= htmlspecialchars($bio) ?></p>

    <div class="home-contact">
        <h2>Contact</h2>
        <ul class="contact-list">
            <li><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></li>
            <li><a href="<?= htmlspecialchars($linkedin) ?>" target="_blank" rel="noreferrer">LinkedIn</a></li>
            <li><a href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noreferrer">GitHub</a></li>
        </ul>
        <p class="home-location"><?= htmlspecialchars($location) ?></p>
    </div>
</section>