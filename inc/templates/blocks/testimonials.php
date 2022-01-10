<?php
/**
 * Block Name: Testimonials
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'testimonials-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$title = get_field( 'title' ) ?: 'Title';
$items = get_field( 'items' );

?>
<section id="<?php echo $id; ?>" class="testimonials <?php echo $align_class; ?>">
    <div class="container">
        <p class="testimonials__title"><?php echo $title; ?></p>
        <!-- Slider main container -->
        <div class="testimonials__swiper-wrapper">
            <div class="testimonials__swiper swiper">
                <!-- Additional required wrapper -->
                <div class="testimonials__swiper-wrapper swiper-wrapper">
                    <!-- Slides -->
			        <?php if ( count( $items ) > 0 ): ?>
				        <?php foreach ( $items as $item ): ?>
                            <div class="testimonials__swiper-slide swiper-slide">
                                <p class="testimonials__description"><?php echo $item['description']; ?></p>
                                <div class="testimonials__info">
                                    <div class="testimonials__img">
                                        <img src="<?php echo $item['image']['url']; ?>"
                                             alt="<?php echo $item['image']['alt']; ?>">
                                    </div>
                                    <div class="testimonials__text">
                                        <p class="testimonials__name"><?php echo $item['name']; ?></p>
                                        <p class="testimonials__position"><?php echo $item['position']; ?></p>
                                    </div>
                                </div>
                            </div>
				        <?php endforeach; ?>
			        <?php endif; ?>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="testimonials__swiper-button-prev swiper-button-prev">
                <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1.97609 8.21913C1.47568 8.61946 1.47568 9.38054 1.97609 9.78087L11 17" stroke="white" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="testimonials__swiper-button-next swiper-button-next">
                <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L10.0239 8.21913C10.5243 8.61946 10.5243 9.38054 10.0239 9.78087L1 17" stroke="white" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <!-- If we need pagination -->
            <div class="testimonials__swiper-pagination swiper-pagination"></div>
        </div>
    </div>
</section>