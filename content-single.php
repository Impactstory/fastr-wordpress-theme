<?php
/**
 * @package fastr
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php fastr_posted_on(); ?>
            <?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'fastr' ) );
				if ( $categories_list && fastr_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'on %1$s', 'fastr' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'fastr' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'tagged %1$s', 'fastr' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>

		</div><!-- .entry-meta -->
        
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fastr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="newsletter-pitch">
	   <h3>Care about open science and altmetrics?</h3>
	   <p>Awesome, us too. In fact, it's what we're <em>obsessed</em> with.
	   And as a mission-driven non-profit, we love sharing our latest tips and insights
	   with folks like you.
	   <a href="http://impactstory.us4.list-manage.com/subscribe?u=26fcc4e14b24319755845d9e0&id=865c51e966">Sign up for our free newsletter</a>
	   to get our latest and greatest.</p>
	</div>


</article><!-- #post-## -->
