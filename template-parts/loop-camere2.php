<div class="splide" aria-label="Basic Structure Example">
  <div class="splide__track">
		<ul class="splide__list">
			<?php 
				$loop = new WP_Query( array( 
					'post_type'         => 'camere_viale',
					'post_status'       => 'publish',
					'orderby'           => 'count',
					'order'             => 'DESC',
				) );
			while($loop->have_posts()) : $loop->the_post(); ?>	

				<li class="splide__slide">
                    <article>
                        <img src="<?php echo get_the_post_thumbnail_url();?>" loading=lazy alt="">
                    </article>
				</li>
			<?php endwhile; ?>
		</ul>
  </div>
</div>