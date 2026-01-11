<?php
/**
 * Block: Rhumba - Nouveautés Bière
 */

$fields = get_fields();
if (!$fields) return;

$nouveautes_biere = $fields['nouveautes-biere'] ?? null;
if (!$nouveautes_biere) return;

$titre = $nouveautes_biere['titre'] ?? '';
$sous_titre = $nouveautes_biere['sous_titre'] ?? '';
$bieres = $nouveautes_biere['bieres'] ?? [];
$background = $nouveautes_biere['background'] ?? '';
?>

<section class="rhumba-nouveautes-biere anim-section <?php echo !$background ? 'notice' : ''; ?>" id="rhumba-nouveautes-biere" <?php if ($background): ?>style="background-image: url('<?php echo esc_url($background); ?>');"<?php endif; ?>>
    <?php if ($titre): ?>
        <h2 class="rhumba-nouveautes-biere__titre bounce-text"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>
    <?php if ($sous_titre): ?>
        <h3 class="rhumba-nouveautes-biere__sous-titre"><?php echo esc_html($sous_titre); ?></h3>
    <?php endif; ?>

    <?php if (!empty($bieres)): ?>
        <div class="rhumba-nouveautes-biere__container">
            <!-- En-tête des colonnes -->
            <div class="rhumba-nouveautes-biere__header">
                <div class="rhumba-nouveautes-biere__header-nom-group">
                    <span class="rhumba-nouveautes-biere__header-nom">Nom</span>
                    <div class="rhumba-nouveautes-biere__header-info-group">
                        <span class="rhumba-nouveautes-biere__header-info">Type</span>
                        <span class="rhumba-nouveautes-biere__header-info">%</span>
                    </div>
                </div>
                <span class="rhumba-nouveautes-biere__header-prix">25cl</span>
                <span class="rhumba-nouveautes-biere__header-prix">50cl</span>
            </div>

            <!-- Liste des bières -->
            <div class="rhumba-nouveautes-biere__liste">
                <?php foreach ($bieres as $biere): ?>
                    <!-- Nom + Type + % -->
                    <div class="rhumba-nouveautes-biere__item-group">
                        <span class="rhumba-nouveautes-biere__nom">
                            <?php echo esc_html($biere['nom'] ?? ''); ?>
                            <?php if (!empty($biere['bio'])): ?>
                                <span class="rhumba-nouveautes-biere__bio">BIO</span>
                            <?php endif; ?>
                        </span>
                        <div class="rhumba-nouveautes-biere__details">
                            <?php if (!empty($biere['type'])): ?>
                                <span class="rhumba-nouveautes-biere__type"><?php echo esc_html($biere['type']); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($biere['degres'])): ?>
                                <span class="rhumba-nouveautes-biere__degres"><?php echo esc_html($biere['degres']); ?>%</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Prix 25cl -->
                    <?php if (!empty($biere['prix_25'])): ?>
                        <span class="rhumba-nouveautes-biere__prix-item"><?php echo esc_html($biere['prix_25']); ?>€</span>
                    <?php else: ?>
                        <span class="rhumba-nouveautes-biere__prix-item">-</span>
                    <?php endif; ?>

                    <!-- Prix 50cl -->
                    <?php if (!empty($biere['prix_50'])): ?>
                        <span class="rhumba-nouveautes-biere__prix-item"><?php echo esc_html($biere['prix_50']); ?>€</span>
                    <?php else: ?>
                        <span class="rhumba-nouveautes-biere__prix-item">-</span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
