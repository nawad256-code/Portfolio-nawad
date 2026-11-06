<section class="page">
    <a href="index.php?page=stages" class="back-link">← Retour aux stages</a>

    <h1><?= htmlspecialchars($mission['title']) ?></h1>

    <div class="card">
        <div class="card__block">
            <h3>Contexte</h3>
            <p><?= htmlspecialchars($mission['context']) ?></p>
        </div>

        <div class="card__block">
            <h3>Tâches réalisées</h3>
            <ul class="task-list">
                <?php foreach ($mission['tasks'] as $task): ?>
                    <li><?= htmlspecialchars($task) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card__block">
            <h3>Outils et compétences</h3>
            <ul class="tag-list">
                <?php foreach ($mission['tools'] as $tool): ?>
                    <li><?= htmlspecialchars($tool) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card__block">
            <h3>Résultat</h3>
            <p><?= htmlspecialchars($mission['result']) ?></p>
        </div>
    </div>
</section>