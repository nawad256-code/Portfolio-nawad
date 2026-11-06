<section class="page">
    <h1>Projets professionnels</h1>
    <p class="page-intro">Présentation de deux projets réalisés dans le cadre de ma formation, avec le contexte, l'objectif et les compétences mobilisées.</p>

    <div class="card-list">
        <?php foreach ($projets as $p): ?>
            <article class="card">
                <h2><?= htmlspecialchars($p['title']) ?></h2>

                <div class="card__block">
                    <h3>Contexte</h3>
                    <p><?= htmlspecialchars($p['context']) ?></p>
                </div>

                <div class="card__block">
                    <h3>Objectif</h3>
                    <p><?= htmlspecialchars($p['objective']) ?></p>
                </div>

                <div class="card__block">
                    <h3>Description</h3>
                    <p><?= htmlspecialchars($p['description']) ?></p>
                </div>

                <div class="card__block">
                    <h3>Compétences mobilisées</h3>
                    <ul class="tag-list">
                        <?php foreach ($p['competences'] as $c): ?>
                            <li><?= htmlspecialchars($c) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>