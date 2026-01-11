<?php
/**
 * Block: Rhumba - Cocktails
 */

$fields = get_fields();
if (!$fields) return;

$cocktails = $fields["cocktails"] ?? null;
if (!$cocktails) return;

$gros_titre = $cocktails["gros_titre"] ?? "";
$types_alcool = $cocktails["type_alcool"] ?? [];
?>

<section class="rhumba-cocktails anim-section" id="rhumba-cocktails">
    <?php if ($gros_titre): ?>
        <h2 class="rhumba-cocktails__titre"><?php echo esc_html($gros_titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($types_alcool)): ?>
        <?php foreach ($types_alcool as $type): ?>
            <div class="rhumba-cocktails__categorie">
                <?php if (!empty($type["nom_alcool"])): ?>
                    <h3 class="rhumba-cocktails__categorie-titre"><?php echo esc_html($type["nom_alcool"]); ?></h3>
                <?php endif; ?>

                <?php if (!empty($type["cocktails"])): ?>
                    <div class="rhumba-cocktails__liste">
                        <?php foreach ($type["cocktails"] as $cocktail): ?>
                            <div class="rhumba-cocktails__item">
                                <h4 class="rhumba-cocktails__nom"><?php echo esc_html($cocktail["titre_cocktail"] ?? ""); ?></h4>

                                <?php if (!empty($cocktail["recette"])): ?>
                                    <p class="rhumba-cocktails__recette"><?php echo esc_html($cocktail["recette"]); ?></p>
                                <?php endif; ?>

                                <?php if (!empty($cocktail["prix"])): ?>
                                    <p class="rhumba-cocktails__prix"><?php echo esc_html($cocktail["prix"]); ?>€</p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
