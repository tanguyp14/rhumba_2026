<?php

/**
 * Block: Rhumba - Vins
 */

$fields = get_fields();
if (!$fields) return;

$vins = $fields["vins"] ?? null;
if (!$vins) return;

$titre = $vins["titre"] ?? "";
$types_vins = $vins["type_vins"] ?? [];
?>

<section class="rhumba-vins anim-section" id="rhumba-vins">
    <?php if ($titre): ?>
        <h2 class="rhumba-vins__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($types_vins)): ?>
        <!-- En-tête des colonnes global -->
        <div class="rhumba-vins__header">
            <span class="rhumba-vins__header-nom">Nom</span>
            <span class="rhumba-vins__header-prix">Verre <br/>16cl</span>
            <span class="rhumba-vins__header-prix">Bouteilles 70cl</span>
        </div>

        <?php foreach ($types_vins as $type): ?>
            <div class="rhumba-vins__categorie">
                <?php if (!empty($type["nom_vin"])): ?>
                    <h3 class="rhumba-vins__categorie-titre"><?php echo esc_html($type["nom_vin"]); ?></h3>
                <?php endif; ?>

                <?php if (!empty($type["all_vins"])): ?>
                    <div class="rhumba-vins__container">
                        <!-- Liste des vins -->
                        <div class="rhumba-vins__liste">
                            <?php foreach ($type["all_vins"] as $vin): ?>
                                <span class="rhumba-vins__nom">
                                    <?php echo esc_html($vin["titre_vin"] ?? ""); ?>
                                    <?php if (!empty($vin["bio"])): ?>
                                        <span class="rhumba-vins__bio">BIO</span>
                                    <?php endif; ?>
                                </span>
                                <span class="rhumba-vins__prix-item">
                                    <?php
                                    echo !empty(trim($vin["prix"] ?? ""))
                                        ? esc_html($vin["prix"]) . "€"
                                        : "-";
                                    ?>
                                </span>

                                <span class="rhumba-vins__prix-item">
                                    <?php
                                    echo !empty(trim($vin["prix_bouteille"] ?? ""))
                                        ? esc_html($vin["prix_bouteille"]) . "€"
                                        : "-";
                                    ?>
                                </span>

                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>