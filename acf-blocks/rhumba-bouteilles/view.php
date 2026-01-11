<?php
/**
 * Block: Rhumba - Bouteilles
 */

$fields = get_fields();
if (!$fields) return;

$bouteilles = $fields["bouteilles"] ?? null;
if (!$bouteilles) return;

$titre = $bouteilles["titre"] ?? "";
$toutes_bouteilles = $bouteilles["toutes_bouteilles"] ?? [];
?>

<section class="rhumba-bouteilles anim-section" id="rhumba-bouteilles">
    <?php if ($titre): ?>
        <h2 class="rhumba-bouteilles__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($toutes_bouteilles)): ?>
        <div class="rhumba-bouteilles__container">
            <!-- En-tête des colonnes -->
            <div class="rhumba-bouteilles__header">
                <div class="rhumba-bouteilles__header-nom-group">
                    <span class="rhumba-bouteilles__header-nom">Nom</span>
                    <div class="rhumba-bouteilles__header-info-group">
                        <span class="rhumba-bouteilles__header-info">Type</span>
                        <span class="rhumba-bouteilles__header-info">Degré</span>
                    </div>
                </div>
                <span class="rhumba-bouteilles__header-prix">CL</span>
                <span class="rhumba-bouteilles__header-prix">Prix</span>
            </div>

            <!-- Liste des bouteilles -->
            <div class="rhumba-bouteilles__liste">
                <?php foreach ($toutes_bouteilles as $bouteille): ?>
                    <div class="rhumba-bouteilles__item-group">
                        <span class="rhumba-bouteilles__nom">
                            <?php echo esc_html($bouteille["nom_bouteille"] ?? ""); ?>
                            <?php if (!empty($bouteille["bio"])): ?>
                                <span class="rhumba-bouteilles__bio">BIO</span>
                            <?php endif; ?>
                        </span>
                        <div class="rhumba-bouteilles__details">
                            <span class="rhumba-bouteilles__type"><?php echo esc_html($bouteille["type"] ?? "-"); ?></span>
                            <span class="rhumba-bouteilles__degres"><?php echo !empty($bouteille["degree"]) ? esc_html($bouteille["degree"]) . "%" : "-"; ?></span>
                        </div>
                    </div>
                    <span class="rhumba-bouteilles__cl"><?php echo !empty($bouteille["cl"]) ? esc_html($bouteille["cl"]) . "cl" : "-"; ?></span>
                    <span class="rhumba-bouteilles__prix"><?php echo esc_html($bouteille["prix"] ?? "-"); ?>€</span>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
