<section class="page">
    <a href="index.php?page=veille" class="back-link">← Retour à la veille</a>

    <h1><?= htmlspecialchars($topic['title']) ?></h1>
    <p class="page-intro"><?= htmlspecialchars($topic['period']) ?></p>

    <div class="card">
        <?php foreach ($topic['sections'] as $section): ?>
            <div class="card__block">
                <h3><?= htmlspecialchars($section['heading']) ?></h3>
                <p><?= htmlspecialchars($section['content']) ?></p>
            </div>
        <?php endforeach; ?>

        <?php if (!empty($topic['tags'])): ?>
            <div class="card__block">
                <h3>Mots-clés</h3>
                <ul class="tag-list">
                    <?php foreach ($topic['tags'] as $tag): ?>
                        <li><?= htmlspecialchars($tag) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($topic['sources'])): ?>
            <div class="card__block">
                <h3>Sources</h3>
                <ul class="source-list">
                    <?php foreach ($topic['sources'] as $src): ?>
                        <li>
                            <a href="<?= htmlspecialchars($src['url']) ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars($src['title']) ?></a>
                            <span class="source-list__meta"><?= htmlspecialchars($src['site']) ?>, <?= htmlspecialchars($src['date']) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
