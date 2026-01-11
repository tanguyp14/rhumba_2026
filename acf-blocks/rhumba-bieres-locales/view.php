<?php
/**
 * Block: Rhumba - Bières Bouteilles Locales
 */

$fields = get_fields();
if (!$fields) return;

$bieres_locales = $fields["bieres_bouteilles_locales"] ?? null;
if (!$bieres_locales) return;

$titre = $bieres_locales["titre"] ?? "";
$bieres = $bieres_locales["toutes_bieres_locales"] ?? [];
?>

<section class="rhumba-bieres-locales anim-section" id="rhumba-bieres-locales">
    <?php if ($titre): ?>
        <h2 class="rhumba-bieres-locales__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($bieres)): ?>
        <div class="rhumba-bieres-locales__liste">
            <?php foreach ($bieres as $biere): ?>
                <div class="rhumba-bieres-locales__item">
                    <?php if (!empty($biere["image"])): ?>
                        <div class="rhumba-bieres-locales__image">
                            <img src="<?php echo esc_url($biere["image"]); ?>" alt="<?php echo esc_attr($biere["nom_biere"] ?? ""); ?>">
                        </div>
                    <?php endif; ?>

                    <div class="rhumba-bieres-locales__content">
                        <h3 class="rhumba-bieres-locales__nom"><?php echo esc_html($biere["nom_biere"] ?? ""); ?></h3>

                        <div class="rhumba-bieres-locales__info-grid">
                            <?php if (!empty($biere["type_de_biere"])): ?>
                                <span class="rhumba-bieres-locales__type"><?php echo esc_html($biere["type_de_biere"]); ?></span>
                            <?php endif; ?>

                            <?php if (!empty($biere["degres_dalcool"])): ?>
                                <span class="rhumba-bieres-locales__degres"><?php echo esc_html($biere["degres_dalcool"]); ?>%</span>
                            <?php endif; ?>

                            <?php if (!empty($biere["nombre_de_cl"])): ?>
                                <span class="rhumba-bieres-locales__cl"><?php echo esc_html($biere["nombre_de_cl"]); ?>cl</span>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($biere["description"])): ?>
                            <p class="rhumba-bieres-locales__description"><?php echo esc_html($biere["description"]); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($biere["prix"])): ?>
                            <p class="rhumba-bieres-locales__prix"><?php echo esc_html($biere["prix"]); ?>€</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
