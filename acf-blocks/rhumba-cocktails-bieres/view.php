<?php
/**
 * Block: Rhumba - Cocktails Bières
 */

$fields = get_fields();
if (!$fields) return;

$cocktails_bieres = $fields["cocktails_bieres"] ?? null;
if (!$cocktails_bieres) return;

$titre = $cocktails_bieres["titre"] ?? "Cocktails Bières";
$cocktails = $cocktails_bieres["cocktail_biere"] ?? [];
?>

<section class="rhumba-cocktails-bieres anim-section" id="rhumba-cocktails-bieres">
    <?php if ($titre): ?>
        <h2 class="rhumba-cocktails-bieres__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($cocktails)): ?>
        <div class="rhumba-cocktails-bieres__container">
            <!-- En-tête des colonnes -->
            <div class="rhumba-cocktails-bieres__header">
                <span class="rhumba-cocktails-bieres__header-nom">Nom</span>
                <span class="rhumba-cocktails-bieres__header-prix">25 CL</span>
                <span class="rhumba-cocktails-bieres__header-prix">50 CL</span>
                <span class="rhumba-cocktails-bieres__header-prix">1 L</span>
            </div>

            <!-- Liste des cocktails -->
            <div class="rhumba-cocktails-bieres__liste">
                <?php foreach ($cocktails as $cocktail): ?>
                    <span class="rhumba-cocktails-bieres__nom"><?php echo esc_html($cocktail["nom_cocktail"] ?? ""); ?></span>
                    <span class="rhumba-cocktails-bieres__prix-item"><?php echo esc_html($cocktail["prix_demi"] ?? "-"); ?>€</span>
                    <span class="rhumba-cocktails-bieres__prix-item"><?php echo esc_html($cocktail["prix_pinte"] ?? "-"); ?>€</span>
                    <span class="rhumba-cocktails-bieres__prix-item"><?php echo esc_html($cocktail["prix_pichet"] ?? "-"); ?>€</span>
                    <span class="rhumba-cocktails-bieres__recette"><?php echo esc_html($cocktail["recette"] ?? ""); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
