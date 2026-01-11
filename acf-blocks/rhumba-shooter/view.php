<?php
/**
 * Block: Rhumba - Shooter
 */

$fields = get_fields();
if (!$fields) return;

$shooter = $fields["shooter"] ?? null;
if (!$shooter) return;

$titre = $shooter["titre"] ?? "";
$shooters = $shooter["shooters"] ?? [];
?>

<section class="rhumba-shooter anim-section" id="rhumba-shooter">
    <?php if ($titre): ?>
        <h2 class="rhumba-shooter__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($shooters)): ?>
        <div class="rhumba-shooter__liste">
            <?php foreach ($shooters as $shot): ?>
                <div class="rhumba-shooter__item">
                    <h3 class="rhumba-shooter__nom"><?php echo esc_html($shot["nom"] ?? ""); ?></h3>

                    <?php if (!empty($shot["recette"])): ?>
                        <p class="rhumba-shooter__recette"><?php echo esc_html($shot["recette"]); ?></p>
                    <?php endif; ?>

                    <?php if (!empty($shot["prix"])): ?>
                        <p class="rhumba-shooter__prix"><?php echo esc_html($shot["prix"]); ?>€</p>
                    <?php endif; ?>

                    <?php if (!empty($shot["supp"]) && in_array("sirops", $shot["supp"])): ?>
                            <span class="rhumba-shooter__supp"><?php if (in_array("sirops", $shot["supp"])): ?><?php the_field('sirops_froids','option'); ?><?php endif; ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
