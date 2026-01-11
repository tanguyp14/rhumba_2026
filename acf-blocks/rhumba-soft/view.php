<?php
/**
 * Block: Rhumba - Soft
 */

$fields = get_fields();
if (!$fields) return;

$soft = $fields["soft"] ?? null;
if (!$soft) return;

$titre = $soft["titre"] ?? "";
$softs = $soft["softs"] ?? [];
?>

<section class="rhumba-soft anim-section" id="rhumba-soft">
    <?php if ($titre): ?>
        <h2 class="rhumba-soft__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($softs)): ?>
        <div class="rhumba-soft__liste">
            <?php foreach ($softs as $soft_item): ?>
                <div class="rhumba-soft__item">
                    <span class="rhumba-soft__nom"><?php echo esc_html($soft_item["nom"] ?? ""); ?></span>

                    <?php if (!empty($soft_item["prix"])): ?>
                        <span class="rhumba-soft__prix"><?php echo esc_html($soft_item["prix"]); ?>€</span>
                    <?php endif; ?>

                    <?php if (!empty($soft_item["supp"])): ?>
                        <span class="rhumba-soft__supp">
                            <?php if (in_array("sirops", $soft_item["supp"])): ?><?php the_field('sirops_froids','option'); ?><?php endif; ?>
                            <?php if (in_array("jus", $soft_item["supp"])): ?><?php the_field('jus','option'); ?><?php endif; ?>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
