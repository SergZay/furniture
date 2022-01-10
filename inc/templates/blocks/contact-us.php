<?php
/**
 * Block Name: Contact us
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'contact us-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$title        = get_field( 'title' ) ?: 'Title';
$description  = get_field( 'description' ) ?: 'Description';
$contact_form = get_field( 'contact_form' );

?>
<section id="<?php echo $id; ?>" class="contact-us <?php echo $align_class; ?>">
    <div class="container">
        <div class="contact-us__wrapper">
            <p class="contact-us__title"><?php echo $title; ?></p>
            <p class="contact-us__description"><?php echo $description; ?></p>
            <div class="contact-us__form">
	            <?php echo $contact_form; ?>
            </div>
        </div>
    </div>
</section>