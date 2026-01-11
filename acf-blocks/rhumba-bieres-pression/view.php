<?php
/**
 * Block: Rhumba - Bières Pression
 */

$fields = get_fields();
if (!$fields) return;

$bieres_pression = $fields['bieres_pression'] ?? null;
if (!$bieres_pression) return;

$titre = $bieres_pression['pression'] ?? 'Bières pression';
$toutes_les_bieres = $bieres_pression['toutes_les_bieres'] ?? [];
?>

<section class="rhumba-bieres-pression  anim-section" id="rhumba-bieres-pression">
    <?php if ($titre): ?>
        <h2 class="rhumba-bieres-pression__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($toutes_les_bieres)): ?>
        <div class="rhumba-bieres-pression__container">
            <!-- En-tête des colonnes -->
            <div class="rhumba-bieres-pression__header">
                <div class="rhumba-bieres-pression__header-nom-group">
                    <span class="rhumba-bieres-pression__header-nom">Nom</span>
                    <div class="rhumba-bieres-pression__header-info-group">
                        <span class="rhumba-bieres-pression__header-info">Type</span>
                        <span class="rhumba-bieres-pression__header-info">Degré</span>
                    </div>
                </div>
                <span class="rhumba-bieres-pression__header-prix">25 CL</span>
                <span class="rhumba-bieres-pression__header-prix">50 CL</span>
                <span class="rhumba-bieres-pression__header-prix">1 L</span>
            </div>

            <!-- Liste des bières -->
            <div class="rhumba-bieres-pression__liste">
                <?php foreach ($toutes_les_bieres as $biere): ?>
                    <div class="rhumba-bieres-pression__item-group">
                        <span class="rhumba-bieres-pression__nom">
                            <?php echo esc_html($biere['nom_biere'] ?? ''); ?>
                            <?php if (!empty($biere['bio'])): ?>
                                <span class="rhumba-bieres-pression__bio">BIO</span>
                            <?php endif; ?>
                        </span>
                        <div class="rhumba-bieres-pression__details">
                            <span class="rhumba-bieres-pression__type"><?php echo esc_html($biere['type_biere'] ?? '-'); ?></span>
                            <span class="rhumba-bieres-pression__degres"><?php echo !empty($biere['degres_alcool']) ? esc_html($biere['degres_alcool']) . "%" : "-"; ?></span>
                        </div>
                    </div>
                    <span class="rhumba-bieres-pression__prix-item"><?php echo esc_html($biere['prix_demi'] ?? '-'); ?>€</span>
                    <span class="rhumba-bieres-pression__prix-item"><?php echo esc_html($biere['prix_pinte'] ?? '-'); ?>€</span>
                    <span class="rhumba-bieres-pression__prix-item"><?php echo esc_html($biere['prix_pichet'] ?? '-'); ?>€</span>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
