<div class="news">
    <h3>
        <?php echo htmlspecialchars($billet['titre']); ?>
        <em>le <?php echo $billet['date_creation_fr']; ?></em>
    </h3>
    <p>
        <?php echo nl2br(htmlspecialchars($billet['contenu'])); ?>
    </p>
</div>
