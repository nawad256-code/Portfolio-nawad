<section class="page">
    <h1>Documents</h1>
    <p class="page-intro">Retrouvez ici mes documents officiels : CV, rapport de stage et tableau de synthèse.</p>

    <div class="card-list">
        <?php foreach ($documents as $doc): ?>
            <article class="card">
                <h2><?= htmlspecialchars($doc['title']) ?></h2>
                <p><?= htmlspecialchars($doc['description']) ?></p>

                <?php if (!empty($doc['file']) && file_exists($doc['file'])): ?>
                    <a class="doc-download" href="<?= htmlspecialchars($doc['file']) ?>" target="_blank" rel="noreferrer">
                        Télécharger le PDF
                    </a>
                <?php else: ?>
                    <p class="card__empty">Document à venir.</p>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>