<section class="page">
    <h1>Veille technologique</h1>
    <p class="page-intro">Suivi régulier de l'actualité informatique et technologique. Cliquez sur un sujet pour consulter la synthèse complète.</p>

    <div class="card-list">
        <?php foreach ($veilleTopics as $v): ?>
            <a href="index.php?page=veille-detail&id=<?= urlencode($v['id']) ?>" class="card card--link">
                <div class="card__head">
                    <h2><?= htmlspecialchars($v['title']) ?></h2>
                    <span class="card__period"><?= htmlspecialchars($v['period']) ?></span>
                </div>
                <p><?= htmlspecialchars($v['summary']) ?></p>
                <span class="card__more">Voir la synthèse →</span>
            </a>
        <?php endforeach; ?>
    </div>
</section>