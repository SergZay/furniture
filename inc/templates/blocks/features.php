<?php
/**
 * Block Name: Features
 *
 */

// create id attribute for specific styling
$id = 'features-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$items = get_field( 'items' );

?>
<section id="<?php echo $id; ?>" class="features <?php echo $align_class; ?>">
    <div class="container">
        <div class="features__wrapper">
			<?php if ( count( $items ) > 0 ): ?>
				<?php foreach ( $items as $item ): ?>
                    <div class="features__item">
                        <div class="features__icon">
                            <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>">
                        </div>
                        <p class="features__title"><?php echo $item['title']; ?></p>
                        <div class="features__description">
                            <?php echo $item['description']; ?>
                        </div>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
    </div>
</section>