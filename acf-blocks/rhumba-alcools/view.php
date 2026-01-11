<?php
/**
 * Block: Rhumba - Alcools
 */

$fields = get_fields();
if (!$fields) return;

$alcools = $fields["alcools"] ?? null;
if (!$alcools) return;

$titre = $alcools["titre"] ?? "";
$types_alcool = $alcools["type_alcool"] ?? [];
?>

<section class="rhumba-alcools anim-section" id="rhumba-alcools">
    <?php if ($titre): ?>
        <h2 class="rhumba-alcools__titre"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <?php if (!empty($types_alcool)): ?>
        <?php foreach ($types_alcool as $type): ?>
            <div class="rhumba-alcools__categorie">
                <?php if (!empty($type["titre_alcool"])): ?>
                    <h3 class="rhumba-alcools__categorie-titre"><?php echo esc_html($type["titre_alcool"]); ?></h3>
                <?php endif; ?>

                <?php if (!empty($type["all_alcool"])): ?>
                    <div class="rhumba-alcools__liste">
                        <?php foreach ($type["all_alcool"] as $alcool): ?>
                            <div class="rhumba-alcools__item">
                                <span class="rhumba-alcools__nom"><?php echo esc_html($alcool["titre_alcool"] ?? ""); ?></span>
                                <?php if (!empty($alcool["prix"])): ?>
                                    <span class="rhumba-alcools__prix"><?php echo esc_html($alcool["prix"]); ?>€</span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
