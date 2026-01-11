<?php
/**
 * Block: Rhumba - Nouveauté Simple
 */

$fields = get_fields();
if (!$fields) return;

$nouveaute_simple = $fields["nouveaute-simple"] ?? null;
if (!$nouveaute_simple) return;

$titre = $nouveaute_simple["titre"] ?? "";
$titre_nouveaute = $nouveaute_simple["titre_nouveaute"] ?? "";
$prix = $nouveaute_simple["prix"] ?? "";
$background = $nouveaute_simple["background"] ?? "";
?>

<section class="rhumba-nouveaute-simple anim-section" id="rhumba-nouveaute-simple">
    <?php if ($titre): ?>
        <h2 class="rhumba-nouveaute-simple__titre wave-text"><?php echo esc_html($titre); ?></h2>
    <?php endif; ?>

    <div class="rhumba-nouveaute-simple__content <?php echo !$background ? 'notice' : ''; ?>" <?php if ($background): ?>style="background-image: url('<?php echo esc_url($background); ?>');"<?php endif; ?>>
        <?php if ($titre_nouveaute): ?>
            <h3 class="rhumba-nouveaute-simple__titre-nouveaute"><?php echo esc_html($titre_nouveaute); ?></h3>
        <?php endif; ?>
        <?php if ($prix): ?>
            <p class="rhumba-nouveaute-simple__prix"><?php echo esc_html($prix); ?>€</p>
        <?php endif; ?>
    </div>
</section>
