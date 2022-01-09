<?php
/**
 * Block Name: Hero block main page contact us
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'hero-main-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$title       = get_field( 'title' ) ?: 'Title';
$description = get_field( 'description' ) ?: 'Description';
$button      = get_field( 'button' );

?>
<section id="<?php echo $id; ?>" class="hero-main <?php echo $align_class; ?>">
    <div class="container">
        <div class="hero-main__wrapper">
            <p class="hero-main__title"><?php echo $title; ?></p>
            <p class="hero-main__description"><?php echo $description; ?></p>
	        <?php if ( count( $button ) > 0 ): ?>
                <a target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"
                   class="hero-main__btn btn"><?php echo $button['title']; ?></a>
	        <?php endif; ?>
        </div>
    </div>
</section>
