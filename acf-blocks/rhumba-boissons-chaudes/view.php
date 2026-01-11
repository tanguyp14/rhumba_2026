<?php
/**
 * Block: Rhumba - Boissons Chaudes
 */

$fields = get_fields();
if (!$fields) return;

$boissons_chaudes = $fields["boissons-chaudes"] ?? null;
if (!$boissons_chaudes) return;

$titre = $boissons_chaudes["titre"] ?? "";
$boissons = $boissons_chaudes["boisson-chaudes"] ?? [];
?>

<section class="rhumba-boissons-chaudes  anim-section" id="rhumba-boissons-chaudes">
    <?php if ($titre): ?>
        <h2 class="rhumba-boissons-chaudes__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($boissons)): ?>
        <div class="rhumba-boissons-chaudes__liste">
            <?php foreach ($boissons as $boisson): ?>
                <div class="rhumba-boissons-chaudes__item">
                    <span class="rhumba-boissons-chaudes__nom"><?php echo esc_html($boisson["nom"] ?? ""); ?></span>

                    <?php if (!empty($boisson["prix"])): ?>
                        <span class="rhumba-boissons-chaudes__prix"><?php echo esc_html($boisson["prix"]); ?>€</span>
                    <?php endif; ?>

                    <?php if (!empty($boisson["supp"])): ?>
                        <span class="rhumba-boissons-chaudes__supp">
                            <?php if (in_array("the", $boisson["supp"])): ?><?php the_field('thes','option'); ?><?php endif; ?>
                            <?php if (in_array("sirop", $boisson["supp"])): ?><?php the_field('sirops_chauds','option'); ?><?php endif; ?>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
