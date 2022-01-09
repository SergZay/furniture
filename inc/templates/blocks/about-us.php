<?php
/**
 * Block Name: About us
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'about-us-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$text  = get_field( 'text' );
$image = get_field( 'image' );

?>
<section id="<?php echo $id; ?>" class="about-us <?php echo $align_class; ?>">
    <div class="container">
        <div class="about-us__wrapper">
            <div class="about-us__img">
				<?php if ( count( $image ) > 0 ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				<?php endif; ?>
            </div>
            <div class="about-us__text">
				<?php if ( count( $text ) > 0 ): ?>
                    <p class="about-us__title"><?php echo $text['title']; ?></p>
                    <div class="about-us__description">
						<?php echo $text['description']; ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>