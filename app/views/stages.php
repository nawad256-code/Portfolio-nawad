<section class="page">
    <h1>Stage</h1>
    <p class="page-intro">Le BTS SIO demande la réalisation de deux stages. Voici le détail de mes expériences.</p>

    <div class="card-list">
        <?php foreach ($stages as $s): ?>
            <article class="card">
                <div class="card__head">
                    <h2><?= htmlspecialchars($s['title']) ?></h2>
                    <?php if (!empty($s['period'])): ?>
                        <span class="card__period"><?= htmlspecialchars($s['period']) ?></span>
                    <?php endif; ?>
                </div>

                <?php if (!empty($s['org'])): ?>
                    <p class="card__org"><?= htmlspecialchars($s['org']) ?></p>
                <?php endif; ?>

                <?php if (!empty($s['description'])): ?>
                    <p><?= htmlspecialchars($s['description']) ?></p>
                <?php else: ?>
                    <p class="card__empty">À compléter.</p>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>

    <h2 class="section-subtitle">Mes missions détaillées</h2>
    <p class="page-intro">Cliquez sur une mission pour voir le contexte, les tâches réalisées et les résultats obtenus.</p>

    <div class="card-list">
        <?php foreach ($missions as $m): ?>
            <a href="index.php?page=mission&id=<?= urlencode($m['id']) ?>" class="card card--link">
                <h3><?= htmlspecialchars($m['title']) ?></h3>
                <p><?= htmlspecialchars($m['summary']) ?></p>
                <span class="card__more">Voir le détail →</span>
            </a>
        <?php endforeach; ?>
    </div>
</section>