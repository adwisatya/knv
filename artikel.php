			<?php
				$prodnum=of_get_option('w2f_prod_number');
				
				if ( get_query_var('paged') )
					$paged = get_query_var('paged');
				elseif ( get_query_var('page') )
					$paged = get_query_var('page');
				else
					$paged = 1;
				$wp_query = new WP_Query(array('post_type' => 'products', 'posts_per_page' => $prodnum, 'paged' => $paged ));
				?>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
					<div class="product-box grid_3">
						<div class="prod-thumb">
							<?php
								$thumb = get_post_thumbnail_id();
								$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
								$image = aq_resize( $img_url, 180, 150, false ); //resize & crop the image
							?>
							<?php if($image) : ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo $image ?>"/></a> <?php endif; ?>
						</div>
						<div class="prod-info">
							<div class="pricebar cf"> 
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<span class="pricetag"><?php echo get_post_meta($post->ID,'_product_info_product_price', true); ?> </span>
							</div>
							
							<!-- <p> <?php echo get_post_meta($post->ID,'_product_info_product_description', true); ?> </p> -->
							
							<div class="prod-footer cf">
								<span class="pleft"> <a href="<?php the_permalink(); ?>">View details</a> </span>
								<span class="pright"><a href="<?php echo get_post_meta($post->ID,'_product_info_product_link', true); ?>">Buy Now</a> </span>
							</div>
						</div>	
					</div>
					

				<?php endwhile; ?>
