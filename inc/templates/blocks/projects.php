<?php
/**
 * Block Name: Projects
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'projects-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$title  = get_field( 'title' ) ?: 'Title';
$items  = get_field( 'items' );
$button = get_field( 'button' );

?>
<section id="<?php echo $id; ?>" class="projects <?php echo $align_class; ?>">
    <div class="container">
        <div class="projects__wrapper">
            <div class="projects__main-item">
                <p class="projects__title"><?php echo $title; ?></p>
				<?php
				$count = 0;
				foreach ( $items as $item ):
					if ( $count == 0 ):
						?>
                        <div class="projects__main-item-wrapper">
                            <div class="projects__main-item-img">
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), 'large' ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $item->post_title; ?>">
                            </div>
                            <div class="projects__main-item-text">
                                <p class="projects__main-item-title"><?php echo $item->post_title; ?></p>
                                <div class="projects__main-item-description">
									<?php echo $item->post_content; ?>
                                </div>
                            </div>
                        </div>
						<?php
					endif;
					$count ++;
				endforeach;
				?>
            </div>
            <div class="projects__items">
				<?php
				$count = 0;
				foreach ( $items as $item ):
					if ( $count > 0 ):
						?>
                        <div class="projects__item">
                            <div class="projects__item-img">
	                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), 'medium' ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $item->post_title; ?>">
                            </div>
                            <div class="projects__item-text">
                                <p class="projects__item-title"><?php echo $item->post_title; ?></p>
                                <div class="projects__item-description">
	                                <?php echo $item->post_content; ?>
                                </div>
                            </div>
                        </div>
						<?php
					endif;
					$count ++;
				endforeach;
				?>
                <a target="<?php echo $button['target']; ?>" href="<?php echo $button['ul']; ?>" class="projects__btn btn"><?php echo $button['title']; ?></a>
            </div>
        </div>
    </div>
</section>