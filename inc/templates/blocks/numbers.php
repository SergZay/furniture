<?php
/**
 * Block Name: Numbers
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'numbers-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$items = get_field( 'items' );

?>
<section id="<?php echo $id; ?>" class="numbers <?php echo $align_class; ?>">
    <div class="container">
        <div class="numbers__wrapper">
			<?php if ( count( $items ) > 0 ): ?>
				<?php foreach ( $items as $item ): ?>
                    <div class="numbers__item">
                        <p class="numbers__number"><?php echo $item['number']; ?></p>
                        <p class="numbers__description"><?php echo $item['description']; ?></p>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
    </div>
</section>